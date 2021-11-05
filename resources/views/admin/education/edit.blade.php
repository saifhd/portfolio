@extends('admin.layouts.app')

@section('content')
<h1>Edit Education</h1>
<hr>
<div class="container">
    @include('admin.layouts.flash')

    <form method="post" action="{{ route('education.update',$education->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="exampleInputEmail1">Institute</label>
            <input type="text" name="institute" value="{{ $education->institute }}" class="form-control"
                placeholder="Enter Institute Name">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Course</label>
            <input type="text" class="form-control" value="{{ $education->course }}" name="course"
                placeholder="Title of the Course">
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputPassword1">Started At</label>
                    <input type="date" class="form-control" value="{{ $education->start_date }}" name="start_date">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputPassword1">Ended At(Optional)</label>
                    <input type="date" class="form-control" value="{{ $education->end_date }}" name="end_date">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Description(Optional)</label>
            <textarea name="description" class="form-control" id="" cols="30"
                rows="5">{{ $education->description }}</textarea>
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


@endsection
