@extends('backend.layouts.master')

@section('title', 'Edit User')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                @include('alerts')
                <div class="card-header bg-primary">
                    <h4>Update User Profile</h4>
                </div>

                <div class="card-body">
                    <form method="post" action="{{ url("admin/user/$user->id/edit") }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $user->name }}">
                        </div>
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" class="form-control" name="email" value="{{ $user->email }}">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div class="form-group">
                            <label>Upload Profile</label>
                            <input type="file" name="image" class="form-control-file" id="profile-img">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ url('admin/user') }}" class="btn btn-secondary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection