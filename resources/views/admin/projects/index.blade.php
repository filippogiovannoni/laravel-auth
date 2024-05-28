@extends('layouts.admin')

@section('content')
    <div class="banner bg-dark text-white">
        <div class="container">
            <h2 class="py-2">Projects</h2>
            <a name="createProject" id="createProject" class="btn btn-primary my-3" href="{{ route('admin.projects.create') }}"
                role="button">Create</a>
        </div>

        <div class="container">
            @if (session('message'))
                <div class="alert alert-success" role="alert">
                    <strong>Congratulations!</strong> {{ session('message') }}
                </div>
            @endif
        </div>


    </div>
    <div class="container">
        <div class="table-responsive">
            <table class="table table-white">
                <thead>
                    <tr>
                        <th scope="col">Cover Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Language</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($projects as $project)
                        <tr class="">
                            <td scope="row">
                                @if (Str::startsWith($project->cover_image, 'https://'))
                                    <img width="150" src="{{ $project->cover_image }}" alt="cover_image">
                                @else
                                    <img width="150" src="{{ asset('storage/' . $project->cover_image) }}"
                                        alt="cover_image">
                                @endif
                            </td>
                            <td>{{ $project->name }}</td>
                            <td>{{ $project->language }}</td>
                            <td>{{ $project->slug }}</td>
                            <td>
                                <a href="{{ route('admin.projects.show', $project) }}">View</a>
                                <a href="{{ route('admin.projects.edit', $project) }}">Edit</a>
                            </td>
                        </tr>

                    @empty
                        <tr class="">
                            <td scope="row">No projects yet!</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        {{ $projects->links('pagination::bootstrap-5') }}
    </div>
@endsection
