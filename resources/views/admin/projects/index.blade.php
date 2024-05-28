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
                            <div>
                                <td class="d-flex align-items-center border-0 gap-3">

                                    <a class="btn btn-sm btn-primary" href="{{ route('admin.projects.show', $project) }}">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                    <a class="btn btn-sm btn-secondary" href="{{ route('admin.projects.edit', $project) }}">
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                    </a>
                                    <form action="{{ route('admin.projects.destroy', $project) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash"
                                                aria-hidden="true"></i></button>
                                    </form>
                                </td>
                            </div>
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
