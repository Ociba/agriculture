
@include('frontlayouts.css')
<section class="login-massage-area pt-130 pb-130">
        <div class="container">
            <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="login-massage">
                        <div class="row justify-content-end">
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                <div class="login-massage-item ml-35">
                                    <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="massage-title">
                                                    <h3 class="title">Login</h3>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="input-box item-1 mt-20">
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="input-box item-2 mt-20">
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="form-check mt-20">
                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                    <label class="form-check-label font-weight-bold" for="remember">
                                                        {{ __('Remember Me') }}
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                            <div class="mt-20">
                                            @if (Route::has('password.request'))
                                                <a class="btn btn-link font-weight-bold" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            @endif
                                            </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="input-box mt-20">
                                                    <button type="submit" class="main-btn">
                                                        {{ __('Login') }}
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="u-text-mute u-text-small" href="{{ route('register') }}">Don’t have an account yet? Get Started</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
