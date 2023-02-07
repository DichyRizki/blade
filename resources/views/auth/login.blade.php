@extends('main')
@section('container')

    <div class="center">
        <h1 class="text-center">Login</h1>
    
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="form-group mt-2">
            <label for="email">Email</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                value="{{ old('email') }}" required autocomplete="email" placeholder="Enter your email">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group mt-2">
            <label for="password">Password</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                name="password" required autocomplete="new-password" placeholder="Enter your password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="pass my-2">Forgot Password?</div>
        <button type="submit" class="btn btn-primary mt-2">Login</button>
        <div class="signup_link">Not a member? <a href="/register">SignUp</a></div>
    </form>

    </div> 

@endsection
