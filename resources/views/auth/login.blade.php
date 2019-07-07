@extends ('layouts.auth')

@section ('title')
    Login
@endsection

@section ('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card p-4">
                <div class="card-header text-center text-uppercase h4 font-weight-light">
                    Login
                </div>

                <form method="post" action="{{ route('login') }}">
                    @csrf
                    <div class="card-body py-5">
                        <div class="form-group">
                            <label class="form-control-label">{{ __('E-Mail Address') }}</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="form-control-label">{{ __('Password') }}</label>
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" required autocomplete="current-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="custom-control custom-checkbox mt-4">
                            <input type="checkbox" name="remember" class="custom-control-input" id="login" {{ old('remember') ? 'checked' : ''}}>
                            <label class="custom-control-label" for="login">{{ __('Remember Me') }}</label>
                        </div>
                    </div>


                    <div class="card-footer">
                        <div class="row">
                            <div class="col-6">
                                <button type="submit" class="btn btn-primary px-5">{{ __('Login') }}</button>
                            </div>

                            @if (Route::has('password.request'))
                                <div class="col-6">
                                    <a href="{{ route('password.request') }}" class="btn btn-link">{{ __('Forgot Your Password?') }}</a>
                                </div>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
