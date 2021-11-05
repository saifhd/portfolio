@extends('admin.layouts.app')

@section('content')
<h1>Skills</h1>
<hr>

@include('admin.layouts.flash')
<a href="{{ route('skills.create') }}" class="btn btn-success mb-2 btn-lg text-white">Add New</a>
<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Percentage</th>
            <th scope="col">Action</th>

        </tr>
    </thead>
    <tbody>
        @forelse ($skills as $skill)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $skill->title }}</td>
            <td>{{ $skill->percentage }}</td>
            <td class="">
                <div class="row ">
                    <a href="{{ route('skills.edit',$skill->id) }}"
                        class="btn btn-sm btn-warning ml-3 mr-2">Edit</a>
                    <form
                        onsubmit="return confirm('Do you really want to Delete?');"
                        action="{{ route('skills.destroy',$skill->id) }}" method="POST"
                    >
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
