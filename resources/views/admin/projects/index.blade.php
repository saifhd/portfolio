@extends('admin.layouts.app')

@section('content')
<h1>Projects</h1>
<hr>

@include('admin.layouts.flash')
<a href="{{ route('projects.create') }}" class="btn btn-success mb-2 btn-lg text-white">Add New</a>
<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Live Link</th>
            <th scope="col">Source Link</th>
            <th scope="col">Action</th>

        </tr>
    </thead>
    <tbody>
        @forelse ($projects as $project)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $project->name }}</td>
            <td>{{ $project->live_link }}</td>
            <td>{{ $project->source_link }}</td>
            <td class="">
                <div class="row ">
                    <a href="{{ route('projects.edit',$project->id) }}" class="btn btn-sm btn-warning ml-3 mr-2">Edit</a>
                    <form onsubmit="return confirm('Do you really want to Delete?');"
                        action="{{ route('projects.destroy',$project->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"> Delete</button>
                    </form>
                </div>
            </td>
        </tr>
        @empty
        <tr class="text-center">
            <td colspan="5">No data Found</td>

        </tr>
        @endforelse

    </tbody>
</table>
@endsection
