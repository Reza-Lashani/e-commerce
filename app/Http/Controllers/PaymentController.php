<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Rayanpay\RayanGate\Objects\PaymentRequest;
use Rayanpay\RayanGate\Services\RayanPayServices;

class PaymentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function makePayment()
    {

        // The following codes are resonsible for directing the user to payment page
        // We have used the https://rayanpay.com/
        // $total_price = session('total_price');
        // $user = Auth::user();
        // $name = $user->name;
        // $email = $user->email;
        // $phone = $user->phone_number;

        // $payment_request = new PaymentRequest();
        // $payment_request->setDescription(json_encode(["name" => $name]));
        // $payment_request->setAmount($total_price);
        // $payment_request->setEmail($email);
        // $payment_request->setMobile($phone);
        // $result = RayanPayServices::request($payment_request);

        // if (data_get($result, "Status") == 100) {
        //     RayanPayServices::redirect(data_get($result, "StartPay"));
        // }

        // return response()->json($result, 200);
        return route('cart.index');
    }

}
