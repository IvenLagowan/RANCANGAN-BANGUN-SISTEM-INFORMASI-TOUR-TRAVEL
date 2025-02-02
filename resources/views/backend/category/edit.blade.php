@extends('backend.layouts.master')

@section('title', 'Edit View')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                @include('alerts')
                <div class="card-header bg-primary">
                    <h5>Edit Category</h5>
                </div>

                <div class="card-body">
                    <form method="post" action="{{ url("admin/category/$cat->id/edit") }}">
                        @csrf
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title" value="{{ $cat->title }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ url('admin/category') }}" class="btn btn-secondary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection