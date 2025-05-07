@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<div class="profile-header text-center mb-4">
    <h1 class="display-4">Profil Pengguna</h1>
    <p class="lead">Selamat datang, {{ $username }}!</p>
</div>

<div class="row">
    <div class="col-md-4 mb-4">
        <div class="card">
            <div class="card-body text-center">
                <div class="mb-3">
                    <img src="https://i.pinimg.com/736x/fb/36/cd/fb36cd137d9b217fbebce7640ae0c359.jpg" alt="Profile Photo" class="rounded-circle img-fluid mx-auto d-block" style="width: 150px;">
                </div>
                <h5 class="card-title">{{ $username }}</h5>
                <p class="card-text text-muted">KDrama Enthusiast</p>
                <div class="d-grid gap-2 mt-3">
                    <button class="btn btn-primary" type="button">Edit Profile</button>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-8">
        <div class="card mb-4">
            <div class="card-header">
                <h5 class="mb-0">Account Information</h5>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Username</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $username }}
                    </div>
                </div>
                <hr>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ strtolower($username) }}@example.com
                    </div>
                </div>
                <hr>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Member Since</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ date('F d, Y') }}
                    </div>
                </div>
                <hr>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Role</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        Administrator
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Preferences</h5>
            </div>
            <div class="card-body">
                <h6>Favorite Genres</h6>
                <div class="mb-3">
                    <div class="d-flex flex-wrap gap-2">
                        <span class="badge bg-primary">Romance</span>
                        <span class="badge bg-success">Drama</span>
                        <span class="badge bg-info">Comedy</span>
                    </div>
                </div>
                <h6>Notification Settings</h6>
                <div class="form-check form-switch mb-2">
                    <input class="form-check-input" type="checkbox" id="emailNotif" checked>
                    <label class="form-check-label" for="emailNotif">Email Notifications</label>
                </div>
                <div class="form-check form-switch mb-2">
                    <input class="form-check-input" type="checkbox" id="newReleases" checked>
                    <label class="form-check-label" for="newReleases">New Releases</label>
                </div>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="recommendations">
                    <label class="form-check-label" for="recommendations">Recommendations</label>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
