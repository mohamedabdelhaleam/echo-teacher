@extends('layouts.guest')

@section('content')
    <main class="main-content">
        <div class="admin">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-xxl-3 col-xl-4 col-md-6 col-sm-8">
                        <div class="edit-profile">
                            <div class="edit-profile__logos">
                                {{-- <a href="index.html">
                                    <img class="dark" src="{{ asset('img/logo-dark.png') }}" alt="">
                                    <img class="light" src="{{ asset('img/logo-white.png') }}" alt="">
                                </a> --}}
                            </div>
                            <div class="card border-0">
                                <div class="card-header">
                                    <div class="edit-profile__title">
                                        <h6>Confirm Password</h6>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="edit-profile__body">
                                        <div class="mb-4 text-sm text-gray-600">
                                            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
                                        </div>

                                        <form method="POST" action="{{ route('password.confirm') }}">
                                            @csrf

                                            <!-- Password -->
                                            <div class="form-group mb-25">
                                                <label for="password">Password</label>
                                                <input type="password" id="password" class="form-control" name="password"
                                                    required autocomplete="current-password"
                                                    placeholder="Enter your password">
                                                @if ($errors->has('password'))
                                                    <span
                                                        class="text-red-600 text-sm">{{ $errors->first('password') }}</span>
                                                @endif
                                            </div>

                                            <div
                                                class="admin__button-group button-group d-flex pt-1 justify-content-md-start justify-content-center">
                                                <button type="submit"
                                                    class="btn btn-primary btn-default w-100 btn-squared text-capitalize lh-normal px-50 signIn-createBtn">
                                                    {{ __('Confirm') }}
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
