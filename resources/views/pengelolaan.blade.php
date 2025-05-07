@extends('layouts.app')

@section('title', 'Drama List')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Korean Drama List</h1>
    <button class="btn btn-primary">
        <i class="bi bi-plus-lg"></i> Add New Drama
    </button>
</div>
<ul class="nav nav-tabs mb-4" id="viewTabs" role="tablist">
    <li class="nav-item" role="presentation">
        <button class="nav-link active" id="card-tab" data-bs-toggle="tab" data-bs-target="#card-view" type="button" role="tab" aria-controls="card-view" aria-selected="true">Card View</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="table-tab" data-bs-toggle="tab" data-bs-target="#table-view" type="button" role="tab" aria-controls="table-view" aria-selected="false">Table View</button>
    </li>
</ul>

<div class="tab-content" id="viewTabsContent">
    <div class="tab-pane fade show active" id="card-view" role="tabpanel" aria-labelledby="card-tab">
        <div class="row">
            @foreach($dramas as $drama)
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card kdrama-card h-100">
                    <span class="badge rating-badge">⭐ {{ $drama['rating'] }}</span>
                    <img src="{{ $drama['image'] }}" class="card-img-top" alt="{{ $drama['title'] }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $drama['title'] }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $drama['year'] }} • {{ $drama['episodes'] }} Eps</h6>
                        <p class="card-text">{{ $drama['description'] }}</p>
                        <div class="mb-2">
                            <span class="badge bg-secondary">{{ $drama['genre'] }}</span>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <button class="btn btn-sm btn-outline-primary">Edit</button>
                        <button class="btn btn-sm btn-outline-danger">Delete</button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="tab-pane fade" id="table-view" role="tabpanel" aria-labelledby="table-tab">
        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Year</th>
                        <th scope="col">Genres</th>
                        <th scope="col">Episodes</th>
                        <th scope="col">Rating</th>
                        <th scope="col">Director</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($dramas as $drama)
                    <tr>
                        <th scope="row">{{ $drama['id'] }}</th>
                        <td>{{ $drama['title'] }}</td>
                        <td>{{ $drama['year'] }}</td>
                        <td>{{ $drama['genre'] }}</td>
                        <td>{{ $drama['episodes'] }}</td>
                        <td>⭐ {{ $drama['rating'] }}</td>
                        <td>{{ $drama['director'] }}</td>
                        <td>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-sm btn-outline-primary">Edit</button>
                                <button type="button" class="btn btn-sm btn-outline-danger">Delete</button>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
