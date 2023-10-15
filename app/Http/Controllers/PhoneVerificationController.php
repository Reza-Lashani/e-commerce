<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class PhoneVerificationController extends Controller
{
    public function showVerificationForm() {
        $code = rand(1000, 9999);
        session()->put('verification_code', $code);

        // The following codes are meant for user verification using Kavenegar service
        // ======================================================
        // $api = new KavenegarApi("services.kavenegar.api_key");

        // $phone_number = $request->input('phone_number');
        // $sender = "services.kavenegar.sender_number";
        // $message = "کد تایید شما: $code";
        // $receptor = ['09036135541'];

        // $result = $api->Send($sender, $receptor, $message);

        // if ($result) {
        //     // Handle the result if needed
        // }
        // ======================================================
        
        return view('phoneverify', ['code' => $code]);
    }
    public function verify(Request $request)
    {
        $enteredCode = $request->input('verification_code');
        $expectedCode = $request->session()->get('verification_code');
        // dd("user's entered code is $enteredCode", "generated code is $expectedCode");
    
        // Check if the entered code matches the expected code
        if ($enteredCode == $expectedCode) {
            // Update the 'phone_verification_status' for the authenticated user
            $user = auth()->user();
            if ($user) {
                $user->update([
                    'phone_verification_status' => true,
                ]);
            }
    
            // Redirect the user to the home page with a success message
            return redirect()->route('home')->with('success', 'Wellcome to e-commerce!');
        } else {
            // Code is incorrect; you can redirect back with an error message
            return redirect()->back()->with('error', 'Invalid verification code. Please try again.');
        }
    }
}
