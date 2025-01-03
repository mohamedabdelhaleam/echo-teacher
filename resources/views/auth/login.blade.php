@extends('dashboard.layouts.guest')
@section('content')
    <main class="main-content">
        <div class="admin">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-xxl-3 col-xl-4 col-md-6 col-sm-8">
                        <div class="edit-profile">
                            <div class="edit-profile__logos">
                            </div>
                            <div class="card border-0">
                                <div class="card-header">
                                    <div class="edit-profile__title">
                                        <h6>Sign in</h6>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="edit-profile__body">
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <div class="form-group mb-25">
                                                <label for="email">Email Address</label>
                                                <input type="email" class="form-control" id="email" name="email"
                                                    placeholder="name@example.com" :value="old('email')" required autofocus
                                                    autocomplete="username">
                                                @if ($errors->has('password'))
                                                    <span class="text-red-600 text-sm">{{ $errors->first('email') }}</span>
                                                @endif
                                            </div>
                                            <div class="form-group mb-25 hidden" style="display: none">
                                                <label for="email">Admin</label>
                                                <input type="number" class="form-control" id="email" name="is_admin"
                                                    placeholder="name@example.com" value="1" required autofocus
                                                    >
                                            </div>
                                            <div class="form-group mb-15">
                                                <label for="password-field">Password</label>
                                                <div class="position-relative">
                                                    <input id="password-field" type="password" class="form-control"
                                                        name="password" required autocomplete="current-password"
                                                        placeholder="Password">
                                                    <div
                                                        class="uil uil-eye-slash text-lighten fs-15 field-icon toggle-password2">
                                                    </div>
                                                </div>
                                                @if ($errors->has('password'))
                                                    <span
                                                        class="text-red-600 text-sm">{{ $errors->first('password') }}</span>
                                                @endif
                                            </div>
                                            <div class="admin-condition">
                                                <div class="checkbox-theme-default custom-checkbox">
                                                    <input class="checkbox" type="checkbox" id="remember_me"
                                                        name="remember">
                                                    <label for="remember_me">
                                                        <span class="checkbox-text">Keep me logged in</span>
                                                    </label>
                                                </div>
                                                <a href="{{ route('password.request') }}">Forget password?</a>
                                            </div>
                                            <div
                                                class="admin__button-group button-group d-flex pt-1 justify-content-md-start justify-content-center">
                                                <button
                                                    class="btn btn-primary btn-default w-100 btn-squared text-capitalize lh-normal px-50 signIn-createBtn">
                                                    Sign in
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="px-20">
                                    <p class="social-connector social-connector__admin text-center">
                                        <span>Or</span>
                                    </p>
                                    <div class="button-group d-flex align-items-center justify-content-center">
                                        <ul class="admin-socialBtn">
                                            <li>
                                                <button class="btn text-dark google">
                                                    <img class="svg" src="img/google-Icon.svg" alt="img" />
                                                </button>
                                            </li>
                                            <li>
                                                <button class="radius-md wh-48 content-center facebook">
                                                    <i class="uil uil-facebook-f"></i>
                                                </button>
                                            </li>
                                            <li>
                                                <button class="radius-md wh-48 content-center twitter">
                                                    <i class="uil uil-twitter"></i>
                                                </button>
                                            </li>
                                            <li>
                                                <button class="radius-md wh-48 content-center github">
                                                    <i class="uil uil-github"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="admin-topbar">
                                    <p class="mb-0">
                                        Don't have an account?
                                        <a href="sign-up.html" class="color-primary">
                                            Sign up
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
