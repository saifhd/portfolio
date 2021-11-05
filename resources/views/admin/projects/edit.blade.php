@extends('admin.layouts.app')

@section('content')
<h1>Edit Project</h1>
<hr>
<div class="container">
    @include('admin.layouts.flash')

    <form method="post" action="{{ route('projects.update',$project->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="exampleInputEmail1">Project Name</label>
            <input type="text" name="name" value="{{ $project->name }}" class="form-control"
                placeholder="Enter Project Name">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Live Link</label>
            <input type="text" class="form-control" value="{{ $project->live_link }}" name="live_link"
                placeholder="Title of the Job">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Source Link</label>
            <input type="text" class="form-control" value="{{ $project->source_link }}" name="source_link"
                placeholder="Title of the Job">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Image</label>
            <input type="file" class="form-control" name="image">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Description</label>
            <textarea class="form-control" id="editor" name="details">{!! $project->details !!}</textarea>
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


@endsection

@section('scripts')
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<script>
    tinymce.init({
        selector: 'textarea#editor',
        menubar: false,
        name:'details'
    });
</script>

@endsection
