<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;

class CartController extends Controller
{

    public function index($user_id) {
        $validator = Validator::make(['user_id' => $user_id], [
            'user_id' => ['required', 'integer']
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        $user = User::find($user_id);
        $userOrders = Order::where('user_id', $user_id)
                            ->where('status', 'in_process')
                            ->get();

        $totalPrice = 0;
        $orderProducts = [];
        foreach ($userOrders as $index => $order) {
            $orderId = $order->id;
            $orderProducts[$index] = OrderProduct::where('order_id', $orderId)->get()->first();
            $totalPrice += $orderProducts[$index]->price;
        }

        $orderedProducts = [];
        foreach ($orderProducts as $orderProduct) {
            $productId = $orderProduct->product_id;
            $product = Product::find($productId); 

            if ($product) {
                $orderedProducts[] = $product;
            }
        }

        session(['total_price' => $totalPrice]);
        
        return view('cart', [
            "user" => $user,
            "userOrders" => $userOrders,
            "orderProducts" => $orderProducts,
            "orderedProducts" => $orderedProducts,
            "totalPrice" => $totalPrice
        ]);
    }

}
