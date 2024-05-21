@extends('layouts.admin')

@section('content')
    <div class="banner bg-dark text-white">
        <div class="container">
            <h2 class="py-2">Projects</h2>
        </div>
    </div>
    <div class="container">
        <div class="table-responsive">
            <table class="table table-white">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Language</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($projects as $project)
                        <tr class="">
                            <td scope="row">{{ $project->name }}</td>
                            <td>{{ $project->language }}</td>
                            <td>{{ $project->slug }}</td>
                            <td>
                                <a href="{{ route('admin.projects.show', $project) }}">View</a>
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
    </div>
@endsection
