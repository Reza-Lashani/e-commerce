<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Order;
use App\Models\OrderProduct;

class OrderController extends Controller
{
    public function store(Request $request) {

        $data = $request->all();

        $validator = Validator::make($data, [
            'product_id' => ['required', 'integer'],
            'price' => ['required', 'numeric'],
            'number' => ['required', 'integer', 'min:1', 'max:5']
        ]);

        if($validator->fails()){
            return redirect()
                        ->back()
                        ->withErrors($validator)
                        ->withInputs();
        }

        $productPrice = $data['price'];
        $quantity = $data['number'];
        $orderPrice = $quantity*$productPrice;

        if(auth()->check()) {
            $order = new Order();
            $order->user_id = auth()->user()->id;
            $order->status = 'in_Process';
            $order->save();

            $orderProduct = new OrderProduct();
            $orderProduct->order_id = $order->id;
            $orderProduct->product_id = $data['product_id'];
            $orderProduct->quantity = $quantity;
            $orderProduct->price = $orderPrice;
            $orderProduct->save();

            return redirect()->route('home')->with(
                'success',
                "Thank you for your purchase!");
        } else {
            return redirect()->route('login', [
                'redirect_back' => route('product.show',
                    $request->input('product_id'))
            ]);
        }
    }

    public function destroy($id) {
        
        $orderProduct = OrderProduct::findOrFail($id);
        $orderId = $orderProduct->id;
        $order = Order::findOrFail($orderId);

        $orderProduct->delete();
        $order->delete();
        
        return redirect()
                 ->back()
                 ->with('success', 'Item has been deleted successfully.');
    }
}
