@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="row mb-4">
    <div class="col">
        <h1 class="mb-4">Dashboard</h1>
        <div class="alert alert-success">
            <h4 class="alert-heading">Selamat datang, {{ $username }}!</h4>
            <p>Selamat datang di KDrama Manager, platform pengelolaan drama Korea terbaik untuk pencinta drakor.</p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="dashboard-stats">
            <h3 class="text-primary">10</h3>
            <p class="text-muted mb-0">Total Drama</p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="dashboard-stats">
            <h3 class="text-success">192</h3>
            <p class="text-muted mb-0">Total Episodes</p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="dashboard-stats">
            <h3 class="text-danger">4.9</h3>
            <p class="text-muted mb-0">Average Rating</p>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-md-6">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Popular Genres</h5>
            </div>
            <div class="card-body">
                <div class="d-flex flex-wrap gap-2">
                    <span class="badge bg-primary">Romance</span>
                    <span class="badge bg-success">Drama</span>
                    <span class="badge bg-info">Comedy</span>
                    <span class="badge bg-warning">Thriller</span>
                    <span class="badge bg-danger">Fantasy</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Recent Activities</h5>
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span>Update "When Life Gives You Tangerines"</span>
                        <span class="badge bg-primary rounded-pill">Today</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span>Added "Moving"</span>
                        <span class="badge bg-primary rounded-pill">Yesterday</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span>Added "Goblin"</span>
                        <span class="badge bg-primary rounded-pill">3 days ago</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span>Added "Lovely Runner"</span>
                        <span class="badge bg-primary rounded-pill">4 days ago</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span>Added "Family by Choice"</span>
                        <span class="badge bg-primary rounded-pill">5 days ago</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span>Added "Big Mouth"</span>
                        <span class="badge bg-primary rounded-pill">6 days ago</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span>Added "Welcome to Samdal-ri"</span>
                        <span class="badge bg-primary rounded-pill">7 days ago</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span>Added "Our Blues"</span>
                        <span class="badge bg-primary rounded-pill">8 days ago</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span>Added "The Penthouse: War in Life"</span>
                        <span class="badge bg-primary rounded-pill">9 days ago</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span>Added "Youth of May"</span>
                        <span class="badge bg-primary rounded-pill">10 days ago</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
