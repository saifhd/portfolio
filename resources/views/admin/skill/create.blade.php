@extends('admin.layouts.app')

@section('content')
<h1>Create New Skill</h1>
<hr>
<div class="container">
    @include('admin.layouts.flash')

    <form method="post" action="{{ route('skills.store') }}">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input type="text" name="title" value="{{ old('title') }}" class="form-control"
                placeholder="Enter Skill Name">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Percentage</label>
            <input type="number" class="form-control" value="{{ old('percentage') }}" name="percentage">
        </div>



        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


@endsection
