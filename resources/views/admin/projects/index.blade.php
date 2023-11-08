@extends('layouts.admin.app')

@section('content')
    <div class="container">
        <h1>ADMIN/PROJECTS/INDEX.BLADE</h1>
        <h2 class="fs-4 text-secondary my-4">
            {{ Auth::user()->name }} {{ __('Project List') }}
        </h2>

        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">{{ __('User Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ Auth::user()->name }} {{ __('Projects Page') }}
                    </div>
                </div>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Preview</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>

                    </tr>
                </thead>
                <tbody>
                    @forelse ($projects as $project)
                        <tr class="">
                            <td class="align-middle" scope="row">{{ $project->id }}</td>
                            <td class="text-center align-middle">{{ $project->cover_image }}</td>
                            <td class="align-middle">{{ $project->title }}</td>
                            <td class="align-middle">{{ $project->content }}</td>

                        </tr>
                    @empty
                        <td class="align-middle">No Projects to show</td>
                    @endforelse

                </tbody>
            </table>
        </div>

    </div>
@endsection
