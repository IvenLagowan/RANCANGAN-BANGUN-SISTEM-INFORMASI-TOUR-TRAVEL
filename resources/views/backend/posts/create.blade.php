@extends('backend.layouts.master')

@section('title', 'Create View')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h3 class="heading mb-5">Create New Post</h3>
            @include('alerts')
            <form method="post" action="{{ url('admin/post') }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name='user_id' value="{{ auth()->user()->id }}">
                <div class="form-group mb-4">
                    <label>Title</label>
                    <input type="text" class="form-control" placeholder="Title" name="title">
                </div>
                <div class="form-group">
                    <label>Category</label>
                    <select class="form-control" name="category_id">
                        <option>Please Select</option>
                        @foreach($cats as $cat)
                        <option value="{{ $cat->id }}">{{ $cat->title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mb-4">
                    <label>Period</label>
                    <input type="text" class="form-control" placeholder="" name="period">
                </div>
                <div class="form-group mb-4">
                    <label>Price</label>
                    <input type="text" class="form-control" placeholder="Price" name="price">
                </div>
                <div class="form-group mb-4">
                    <label>Description</label>
                    <textarea class="form-control" rows="6" name="content"></textarea>
                </div>
                <div class="form-group">
                    <label>Upload Image</label>
                    <input type="file" class="form-control-file" name="images" multiple>
                </div>
                <button class="btn btn-primary mt-3" type="submit">Create</button>
                <a href="{{ url('admin/post') }}" class="btn btn-secondary mt-3">Back</a>
        </div>
        </form>
    </div>
</div>

@endsection