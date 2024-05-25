@extends('layouts.admin')

@section('content')
    <div class="container">

        <form action="{{ route('admin.projects.store') }}" method="post">
            @csrf

            <div class="my-3">
                <label for="projectName" class="form-label">Project Name</label>
                <input type="text" class="form-control" name="projectName" id="projectName"
                    aria-describedby="projectNameHelper" placeholder="" />
                <small id="projectNameHelper" class="form-text text-muted">Write the project name here</small>
            </div>

            <div class="my-3">
                <label for="language" class="form-label">Language</label>
                <input type="text" class="form-control" name="language" id="language" aria-describedby="languageHelper"
                    placeholder="" />
                <small id="languageHelper" class="form-text text-muted">Write the language of the project here</small>
            </div>

            <button class="btn btn-primary" type="submit">Create</button>

        </form>


    </div>
@endsection
