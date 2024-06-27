@extends('Dashboard.layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('/css/register.css') }}">
@endpush

@section('title', 'Login Page')

@section('content')



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body p-5">
                    <h2 class="text-center mb-4">Create an Account </h2>
                    <form>
                        <div class="mb-3">
                            <label for="fullName" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="fullName" placeholder="Enter your full name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter your email">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter your password">
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-custom btn-lg">Register</button>
                        </div>

                        <section class="text-center p-2">
                            Already Have Account <a href="{{ route('login.page') }}">Log in</a>
                        </section>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection