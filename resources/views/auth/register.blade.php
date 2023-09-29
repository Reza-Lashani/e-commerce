@extends('layouts.register-layout')

@section('content')
<div class="container">
    
    <div class="card-header">
        {{ __('Register') }}
    </div>

    <form method="POST" action="{{ route('register') }}"
        class="register-form">
        @csrf

        <div>
            <label for="name" class="name-label form-label">{{ __('Name') }}</label>

            <div class="name-wrapper">
                <input type="text" id="name" name="name"
                    class="name-input form-input @error('name') is-invalid @enderror"
                    value="{{ old('name') }}"
                    required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        
        <div>
            <label for="email" class="email-label form-label">{{ __('Email Address') }}</label>

            <div class="email-wrapper">
                <input type="email" id="email" name="email"
                    class="email-input form-input @error('email') is-invalid @enderror"
                    value="{{ old('email') }}"
                    required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div>
            <label for="phone-number" class="phone-number-label form-label">{{ __('Phone Number') }}</label>
            
            <div class="phone-number-wrapper">
                <input type="tel" id="phone-number" name="phone_number"
                    class="phone-number-input form-input @error('phone_number') is-invalid @enderror"
                    value="{{ old('phone-number') }}"
                    required autocomplete="tel">

                @error('phone_number')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div>
            <label for="date-of-birth" class="date-of-birth-label form-label">{{ __('Date of Birth') }}</label>
            
            <div class="date-of-birth-wrapper">
                <input type="date" id="date-of-birth" name="date_of_birth"
                    class="date-of-birth-input form-input @error('date_of_birth') is-invalid @enderror"
                    value="{{ old('date-of-birth') }}"
                    required autocomplete="date">

                @error('date_of_birth')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div>
            <label for="gender" class="form-label">{{ __('Gender') }}</label>
        
            <div class="form-input-wrapper">
                <select id="gender" name="gender" class="gender-input form-input @error('gender') is-invalid @enderror" required>
                    <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                    <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                    <option value="non-binary" {{ old('gender') == 'non-binary' ? 'selected' : '' }}>Non-Binary</option>
                    <option value="others" {{ old('gender') == 'others' ? 'selected' : '' }}>Others</option>
                </select>

                @error('gender')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div>
            <label for="password" class="password-label form-label">{{ __('Password') }}</label>

            <div class="password-wrapper">
                <input type="password" id="password" name="password"
                    class="password-input form-control @error('password') is-invalid @enderror"
                    required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div>
            <label for="password-confirm" class="password-confirm-label form-label">{{ __('Confirm Password') }}</label>
            
            <div class="password-confirm-wrapper">
                <input type="password" id="password-confirm-input" name="password_confirmation"
                    class="form-control"
                    required autocomplete="new-password">
            </div>
        </div>

        <div class="submit-wrapper">
            <button type="submit" class="submit-button btn btn-primary">
                {{ __('Register') }}
            </button>
        </div>
    </form>
</div>
@endsection