@extends('layouts.guest')
@section('content')
    <main class="main-content">
        <div class="admin">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-xxl-3 col-xl-4 col-md-6 col-sm-8">
                        <div class="edit-profile">
                            <div class="edit-profile__logos">
                                <a href="index.html">
                                    <img class="dark" src="{{ asset('img/logo-dark.png') }}" alt="">
                                    <img class="light" src="{{ asset('img/logo-white.png') }}" alt="">
                                </a>
                            </div>
                            <div class="card border-0">
                                <div class="card-header">
                                    <div class="edit-profile__title">
                                        <h6>Reset Password</h6>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="edit-profile__body">
                                        <form method="POST" action="{{ route('password.store') }}">
                                            @csrf

                                            <!-- Password Reset Token -->
                                            <input type="hidden" name="token" value="{{ $request->route('token') }}">

                                            <!-- Email Address -->
                                            <div class="form-group mb-25">
                                                <label for="email">Email Address</label>
                                                <input type="email" class="form-control" id="email" name="email"
                                                    :value="old('email', $request->email)" required autofocus
                                                    autocomplete="username" placeholder="name@example.com">
                                                @if ($errors->has('email'))
                                                    <span class="text-red-600 text-sm">{{ $errors->first('email') }}</span>
                                                @endif
                                            </div>

                                            <!-- Password -->
                                            <div class="form-group mb-15">
                                                <label for="password-field">Password</label>
                                                <div class="position-relative">
                                                    <input id="password-field" type="password" class="form-control"
                                                        name="password" required autocomplete="new-password"
                                                        placeholder="New Password">
                                                    <div
                                                        class="uil uil-eye-slash text-lighten fs-15 field-icon toggle-password2">
                                                    </div>
                                                </div>
                                                @if ($errors->has('password'))
                                                    <span
                                                        class="text-red-600 text-sm">{{ $errors->first('password') }}</span>
                                                @endif
                                            </div>

                                            <!-- Confirm Password -->
                                            <div class="form-group mb-25">
                                                <label for="password_confirmation">Confirm Password</label>
                                                <input type="password" class="form-control" id="password_confirmation"
                                                    name="password_confirmation" required autocomplete="new-password"
                                                    placeholder="Confirm Password">
                                                @if ($errors->has('password_confirmation'))
                                                    <span
                                                        class="text-red-600 text-sm">{{ $errors->first('password_confirmation') }}</span>
                                                @endif
                                            </div>

                                            <div
                                                class="admin__button-group button-group d-flex pt-1 justify-content-md-start justify-content-center">
                                                <button type="submit"
                                                    class="btn btn-primary btn-default w-100 btn-squared text-capitalize lh-normal px-50 signIn-createBtn">
                                                    Reset Password
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div><!-- End: .card -->
                        </div><!-- End: .edit-profile -->
                    </div><!-- End: .col-xl-5 -->
                </div>
            </div>
        </div><!-- End: .admin-element  -->
    </main>
@endsection
