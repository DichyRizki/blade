@extends('main')
@section('container')

    <div class="center">
        <h1 class="text-center">Register</h1>
    <form method="post" action="{{ route('register') }}">
        @csrf
        <div class="txt_field">
            <label for="name"></label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                value="{{ old('name') }}" required autocomplete="name" placeholder="Name">
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="txt_field">
            <label for="email"></label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="txt_field">
            <label for="password"></label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                name="password" required autocomplete="new-password" placeholder="Password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="txt_field">
            <label for="password-confirm"></label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                autocomplete="new-password" placeholder="Confirm Password">
        </div>

        <button type="submit" class="btn btn-primary mt-2">
            Register
        </button>
        <div class="signup_link">
                Already have Account? <a href="/login">SignIn</a>
            </div>
    </form>
</div>

@endsection
