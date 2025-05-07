@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6 col-lg-5">
        <div class="card shadow-lg border-0 rounded-lg mt-5">
            <div class="card-header bg-primary text-white">
                <h3 class="text-center font-weight-light my-2">KDrama Manager Login</h3>
            </div>
            <div class="card-body">
                @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                <form action="{{ route('login.process') }}" method="POST">
                    @csrf
                    <div class="form-floating mb-3">
                        <input class="form-control" id="username" name="username" type="text" placeholder="Username" />
                        <label for="username">Username</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="password" name="password" type="password" placeholder="Password" />
                        <label for="password">Password</label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" id="remember" type="checkbox" />
                        <label class="form-check-label" for="remember">Remember me</label>
                    </div>
                    <div class="d-flex align-items-center justify-content-center mt-4 mb-0">
                        <button type="submit" class="btn btn-primary px-4 py-2">Login</button>
                    </div>
                </form>
            </div>
            <div class="card-footer text-center py-3">
                <div class="small">Welcome to KDrama Manager!</div>
            </div>
        </div>
    </div>
</div>
@endsection
