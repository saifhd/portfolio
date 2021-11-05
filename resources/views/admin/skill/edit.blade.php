@extends('admin.layouts.app')

@section('content')
<h1>Edit Skill Details</h1>
<hr>
<div class="container">
    @include('admin.layouts.flash')

    <form method="post" action="{{ route('skills.update',$skill->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input type="text" name="title" value="{{ $skill->title }}" class="form-control"
                placeholder="Enter Skill Name">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Percentage</label>
            <input type="number" class="form-control" value="{{ $skill->percentage }}" name="percentage">
        </div>



        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>


@endsection
