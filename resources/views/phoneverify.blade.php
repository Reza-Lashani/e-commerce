@extends('layouts.phone-verification-layout')

@section('content')

<div class="container">
    <p class="sent-code">"for test purposes", The sent code is: <b>{{ $code }}</b></p>
    <div class="phone-verification-card">

        <div class="phone-verification-card-header">
            <h3>Phone Verifiacation</h3>
        </div>

        <p class="normal-text">A verification code has been sent to your phone number.</p>
        <p>Please enter the code in the field below:</p>
        <form action="{{ route('phone.verified') }}"
        class="phone-verification-form">
            <input type="number" name="verification_code" class="verification-code-input"
                min="1000" max="9999" pattern="[0-9]{4}"
                oninput="this.value = this.value.slice(0, 4);" required>
            <button type="submit" class="submit-button">
                Verify
            </button> 
        </form>
    </div>
    <div style="font-size:12px; text-align:left;">
        <p style="margin:15px 0px 0px 0px;">
            Haven't received verification code?
            <a href="{{ route('phone.verify') }}"
            style="text-decoration: none;">
                Resend
            </a>
        </p>
    </div>
</div>

@endsection