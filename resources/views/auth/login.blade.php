@extends('layouts.app')

@section('content')
<div id="page-container">

    <!-- Main Container -->
    <main id="main-container">

        <!-- Page Content -->
        <div class="bg-image" style="background-image: url('assets/media/photos/photo6@2x.jpg');">
            <div class="hero-static bg-white-95">
                <div class="content">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-6 col-xl-4">
                            <!-- Sign In Block -->
                            <div class="block block-themed  block-fx-shadow mb-0">
                                <div class="block-header">
                                    <h3 class="block-title">{!! trans('admin.sign_up') !!}</h3>
                                    <div class="block-options">
                                        <a class="btn-block-option font-size-sm" href="op_auth_reminder.html">{!! trans('admin.i_forgot_my_password') !!}</a>
                                        <a class="btn-block-option" href="{!! route('register') !!}" data-toggle="tooltip" data-placement="left" title="New Account">
                                            <i class="fa fa-user-plus"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <div class="p-sm-3 px-lg-4 py-lg-5">
                                        <h1 class="mb-2">{!! config('app.name') !!}</h1>
                                        <p>{!! trans('admin.login_message') !!}</p>

                                        <!-- Sign In Form -->
                                        <!-- jQuery Validation (.js-validation-signin class is initialized in js/pages/op_auth_signin.min.js which was auto compiled from _es6/pages/op_auth_signin.js) -->
                                        <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                                        {{--
                                        <form class="js-validation-signin" action="be_pages_auth_all.html" method="POST">
                                        --}}
                                            <form method="POST" action="{{ route('login') }}">
                                                @csrf
                                                <div class="py-3">
                                                    <div class="form-group">
                                                        {{-- <input type="text" class="form-control form-control-alt form-control-lg"
                                                            id="login-username" name="login-username" placeholder="Username">                                                        --}}
                                                        <input id="email" type="email" class="form-control form-control-alt form-control-lg {{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                            name="email" value="{{ old('email') }}" placeholder="Email" required
                                                            autofocus>                                                        @if ($errors->has('email'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </span> @endif
                                                    </div>
                                                    <div class="form-group">
                                                        {{-- <input type="password" class="form-control form-control-alt form-control-lg"
                                                            id="login-password" name="login-password" placeholder="Password">                                                        --}}
                                                        <input id="password" type="password" class="form-control form-control-alt form-control-lg {{ $errors->has('password') ? ' is-invalid' : '' }}"
                                                            name="password" placeholder="Password" required>                                                        @if ($errors->has('password'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('password') }}</strong>
                                                        </span> @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="custom-control custom-checkbox">
                                                            <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old( 'remember') ? 'checked' : '' }}>
                                                            <label class="custom-control-label font-w400" for="remember">
                                                            {{ __('Remember Me') }}
                                                        </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-6 col-xl-5">
                                                        <button type="submit" class="btn btn-block btn-primary">
                                                        <i class="fa fa-fw fa-sign-in-alt mr-1"></i> {{ __('Login') }}
                                                    </button>
                                                    @if(Route::has('password.request'))
                                                        <a class="btn btn-block btn-link" href="{{ route('password.request') }}">
                                                            {{ __('Forgot Your Password?') }}
                                                        </a>
                                                    @endif
                                                    </div>
                                                </div>
                                            </form>
                                            <!-- END Sign In Form -->
                                    </div>
                                </div>
                            </div>
                            <!-- END Sign In Block -->
                        </div>
                    </div>
                </div>
                <div class="content content-full font-size-sm text-muted text-center">
                    <strong>{!! config('app.name') !!}</strong> &copy; <span data-toggle="year-copy">2019</span>
				</div>
			</div>
		</div>
		<!-- END Page Content -->

	</main>
	<!-- END Main Container -->
</div>
<!-- END Page Container -->
@endsection
