@extends('layouts.admin')

@section('content')
    <header class="bg-dark text-white py-4">
        <div class="container d-flex justify-content-between align-items-center">
            <h1>
                Project: {{ $project->name }}
            </h1>
            <a class="btn btn-primary" href="{{ route('admin.projects.index') }}">
                <i class="fas fa-chevron-left fa-sm fa-fw"></i> Go Back</a>
        </div>
    </header>

    <div class="container d-flex justify-content-center">
        <div class="card my-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $project->name }}</h5>
                        <p class="card-text">
                            {{ $project->description }}
                        </p>
                        <p class="card-text">
                            <small class="text-muted">{{ $project->slug }}</small>
                        </p>
                        <p class="card-text">
                            <small class="text-muted">Updated at: {{ $project->updated_at }}</small>
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    @if (Str::startsWith($project->cover_image, 'https://'))
                        <img width="150" class="card-img-top" src="{{ $project->cover_image }}" alt="cover_image">
                    @else
                        <img width="150" class="card-img-top" src="{{ asset('storage/' . $project->cover_image) }}"
                            alt="cover_image">
                    @endif
                </div>
            </div>
        </div>



    </div>
@endsection
