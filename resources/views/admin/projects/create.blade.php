@extends('layouts.admin')

@section('content')
    <div class="container">
        @include('partials.errors')

        <div class="d-flex align-items-center justify-content-between">
            <h2>
                Creating Project
            </h2>
            <a class="btn btn-primary" href="{{ route('admin.projects.index') }}">Go Back</a>
        </div>
        <form action="{{ route('admin.projects.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="my-3">
                <label for="name" class="form-label">Project Name</label>
                <input type="text" class="form-control" name="name" id="name" aria-describedby="nameHelper"
                    placeholder="" />
                <small id="nameHelper" class="form-text text-muted">Write the project name here</small>
            </div>

            <div class="my-3">
                <label for="language" class="form-label">Language</label>
                <input type="text" class="form-control" name="language" id="language" aria-describedby="languageHelper"
                    placeholder="" />
                <small id="languageHelper" class="form-text text-muted">Write the language of the project here</small>
            </div>

            <div class="my-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" rows="4"></textarea>
                <small id="descriptionHelper" class="form-text text-muted">Insert the description of the project</small>
            </div>

            <div class="my-3">
                <label for="cover_image" class="form-label">Cover Image</label>
                <input type="file" class="form-control" name="cover_image" id="cover_image"
                    aria-describedby="coverImageHelper">

                <small id="cover_imageHelper" class="form-text text-muted">Insert the cover image</small>
            </div>



            <button class="btn btn-primary" type="submit">Create</button>

        </form>


    </div>
@endsection
