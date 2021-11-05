@extends('admin.layouts.app')

@section('content')
<h1>Edit Career</h1>
<hr>
<div class="container">
    @include('admin.layouts.flash')

    <form method="post" action="{{ route('career.update',$career->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="exampleInputEmail1">Company Name</label>
            <input type="text" name="company_name" value="{{ $career->company_name }}" class="form-control"
                placeholder="Enter Company Name">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Title</label>
            <input type="text" class="form-control" value="{{ $career->title }}" name="title"
                placeholder="Title of the Job">
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputPassword1">Started At</label>
                    <input type="date" class="form-control" value="{{ $career->start_date }}" name="start_date">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputPassword1">Ended At(Optional)</label>
                    <input type="date" class="form-control" value="{{ $career->end_date }}" name="end_date">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Description(Optional)</label>
            <textarea name="description" class="form-control" id="" cols="30" rows="5">{{ $career->description }}</textarea>
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


@endsection
