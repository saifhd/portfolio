@extends('admin.layouts.app')

@section('content')
<h1>Education</h1>
<hr>

@include('admin.layouts.flash')
<a href="{{ route('education.create') }}" class="btn btn-success mb-2 btn-lg text-white">Add New</a>
<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Institute</th>
            <th scope="col">Course</th>
            <th scope="col">Start Date</th>
            <th scope="col">End Date</th>
            <th scope="col">Action</th>

        </tr>
    </thead>
    <tbody>
        @forelse ($educations as $education)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $education->institute }}</td>
            <td>{{ $education->course }}</td>
            <td>{{ $education->start_date }}</td>
            <td>{{ $education->end_date }}</td>
            <td class="">
                <div class="row ">
                    <a href="{{ route('education.edit',$education->id) }}" class="btn btn-sm btn-warning ml-3 mr-2">Edit</a>
                    <form
                        onsubmit="
                            return confirm('Do you really want to Delete?');
                        "
                        action="{{ route('education.destroy',$education->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button  type="submit" class="btn btn-danger btn-sm"> Delete</button>
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
