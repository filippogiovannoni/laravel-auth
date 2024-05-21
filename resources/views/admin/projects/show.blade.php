@extends('layouts.admin')

@section('content')
    <div class="container d-flex justify-content-center">
        <div class="card my-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $project->name }}</h5>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat dolorem ea quae nesciunt
                            veritatis esse ipsam ducimus nobis. Libero tempore incidunt tempora, accusantium quam nulla!
                        </p>
                        <p class="card-text">
                            <small class="text-muted">{{ $project->slug }}</small>
                        </p>
                        <p class="card-text">
                            <small class="text-muted">Updated at: {{ $project->updated_at }}</small>
                        </p>
                    </div>
                </div>
            </div>
        </div>



    </div>
@endsection
