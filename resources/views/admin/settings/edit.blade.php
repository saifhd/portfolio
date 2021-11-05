@extends('admin.layouts.app')

@section('content')
<h1>Edit Settings</h1>
<hr>
<div class="container">
    @include('admin.layouts.flash')

    <form method="post" action="{{ route('settings.update',$settings->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" name="name" value="{{ $settings->name }}" class="form-control"
                placeholder="Enter Your Name">
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" class="form-control" value="{{ $settings->email }}" name="email"
                        placeholder="Enter Your Email">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputPassword1">Mobile Number</label>
                    <input type="text" class="form-control" value="{{ $settings->mobile }}" name="mobile"
                        placeholder="Enter Your Mobile Number">
                </div>
            </div>
        </div>


        <div class="form-group">
            <label for="exampleInputPassword1">Address Line One</label>
            <input type="text" class="form-control" value="{{ $settings->address_line_1 }}" name="address_line_1"
                placeholder="Address">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Address Line Two</label>
            <input type="text" class="form-control" value="{{ $settings->address_line_2 }}" name="address_line_2"
                placeholder="Address">
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputPassword1">Avatar</label>
                    <input type="file" placeholder="https://..." class="form-control"
                        name="avatar">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputPassword1">Resume</label>
                    <input type="file" placeholder="https://..." class="form-control"
                        name="cv">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputPassword1">Facebook</label>
                    <input type="text" placeholder="https://..." class="form-control" value="{{ $settings->facebook }}" name="facebook">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputPassword1">Instagram</label>
                    <input type="text" placeholder="https://..." class="form-control" value="{{ $settings->instagram }}" name="instagram">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputPassword1">Twitter</label>
                    <input type="text" placeholder="https://..." class="form-control" value="{{ $settings->twitter }}" name="twitter">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputPassword1">LinkedIn</label>
                    <input type="text" placeholder="https://..." class="form-control" value="{{ $settings->linkedin }}" name="linkedin">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputPassword1">Github</label>
                    <input type="text" placeholder="https://..." class="form-control" value="{{ $settings->github }}"
                        name="github">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputPassword1">Bitbucket</label>
                    <input type="text" placeholder="https://..." class="form-control" value="{{ $settings->bitbucket }}"
                        name="bitbucket">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Description(Optional)</label>
            <textarea name="description" class="form-control" id="" cols="30"
                rows="5">{{ $settings->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">About You</label>
            <textarea name="about" class="form-control" id="" cols="30" rows="5">{{ $settings->about }}</textarea>
        </div>


        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>


@endsection
