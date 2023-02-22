@extends('layouts.fullpage.main')
@section('title', 'Register')
@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="row flexbox-container">
                    <div class="col-xl-8 col-10 d-flex justify-content-center">
                        <div class="card bg-authentication rounded-0 mb-0">
                            <div class="row m-0">
                                <div class="col-lg-6 d-lg-block d-none text-center align-self-center pl-0 pr-3 py-0">
                                    <img src="{{ asset('app-assets/images/pages/register.jpg') }}" alt="branding logo">
                                </div>
                                <div class="col-lg-6 col-12 p-0">
                                    <div class="card rounded-0 mb-0 p-2">
                                        <div class="card-header pt-50 pb-1">
                                            <div class="card-title">
                                                <h4 class="mb-0">Create Account</h4>
                                            </div>
                                        </div>
                                        <p class="px-2">Fill the below form to create a new account.</p>
                                        <div class="card-content">
                                            <div class="card-body pt-0">
                                                <form action="{{ route('register') }}" method="POST">
                                                    @csrf
                                                    <div class="form-label-group">
                                                        <input type="text" id="inputName" class="form-control" placeholder="Name" name="name" autofocus value="{{ old('name') }}" required>
                                                        <label for="inputName">Name</label>
                                                        <small class="text-danger">{{ $errors->first('name') }}</small>
                                                    </div>
                                                    <div class="form-label-group">
                                                        <input type="email" id="inputEamil" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required>
                                                        <label for="inputEmail">Email</label>
                                                        <small class="text-danger">{{ $errors->first('email') }}</small>
                                                    </div>
                                                    <div class="form-label-group">
                                                        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" autocomplete="new-password" required>
                                                        <label for="inputPassword">Password</label>
                                                        <small class="text-danger">{{ $errors->first('password') }}</small>
                                                    </div>
                                                    <div class="form-label-group">
                                                        <input type="password" id="inputConfPassword" class="form-control" placeholder="Confirm Password" name="password_confirmation" autocomplete="new-password" required>
                                                        <label for="inputConfPassword">Confirm Password</label>
                                                        <small class="text-danger">{{ $errors->first('password_confirmation') }}</small>
                                                    </div>
                                                    <a href="{{ route('login') }}" class="btn btn-outline-primary float-left btn-inline mb-50">Login</a>
                                                    <button type="submit" class="btn btn-primary float-right btn-inline mb-50">Register</a>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection