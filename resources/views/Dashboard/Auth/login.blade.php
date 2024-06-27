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
                    <h2 class="text-center mb-4">Login</h2>
                    <form>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address or Phone</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter your email or phone ">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter your password">
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-custom btn-lg">Login</button>
                        </div>

                        <section class="text-center p-2">
                            Don't Have an Account <a href="{{ route('register.page') }}">Sign Up</a>
                        </section>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection