@extends('layouts.auth')

@section('content')
<div class="unix-login">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <div class="login-content">
                    <div class="login-logo">
                        <a href="/"><span>ADOOLAM</span></a>
                    </div>
                    <div class="login-form">
                        <h4>Learner Login Page</h4>
                        <form method="POST" action="{{ route('learner.login') }}">
                            @csrf
                            <div class="form-group">
                                <label>Email address</label>
                                <input placeholder="Email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" autofocus>
                                @if ($errors->has('email'))
                                <span class="alert alert-danger">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" >
                                @if ($errors->has('password'))
                                    <span class="alert alert-danger">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}"> Remember Me
                                </label>
                                <label class="pull-right">
                                    <a href="{{ route('learner.password.request') }}">Forgotten Password?</a>
                                </label>

                            </div>
                            <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Sign in</button>
                            <div class="social-login-content">
                                {{-- <div class="social-button">
                                    <button type="button" class="btn btn-primary bg-facebook btn-flat btn-addon m-b-10"><i class="ti-facebook"></i>Sign in with facebook</button>
                                    <button type="button" class="btn btn-primary bg-twitter btn-flat btn-addon m-t-10"><i class="ti-twitter"></i>Sign in with twitter</button>
                                </div> --}}
                            </div>
                            <div class="register-link m-t-15 text-center">
                                <p>Don't have account ? <a href="{{ route('learner.register') }}"> Sign Up Here</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
