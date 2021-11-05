@extends('admin.layouts.app')

@section('content')
    <h1>Careers</h1>
    <hr>

    @include('admin.layouts.flash')
    <a href="{{ route('career.create') }}" class="btn btn-success mb-2 btn-lg text-white">Add New</a>
    <table class="table table-bordered" >
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Company Name</th>
                <th scope="col">Title</th>
                <th scope="col">Start Date</th>
                <th scope="col">End Date</th>
                <th scope="col">Action</th>

            </tr>
        </thead>
        <tbody>
            @forelse ($careers as $career)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $career->company_name }}</td>
                    <td>{{ $career->title }}</td>
                    <td>{{ $career->start_date }}</td>
                    <td>{{ $career->end_date }}</td>
                    <td class="">
                        <div class="row ">
                            <a href="{{ route('career.edit',$career->id) }}" class="btn btn-sm btn-warning ml-3 mr-2">Edit</a>
                            <form
                                onsubmit="return confirm('Do you really want to Delete?');"
                                action="{{ route('career.destroy',$career->id) }}" method="POST">
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
