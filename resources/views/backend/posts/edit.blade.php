@extends('backend.layouts.master')

@section('title', 'Edit View')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h3 class="heading mb-5">Update Post</h3>
            @include('alerts')
            <form method="post" action="{{ url("admin/post/$post->id/edit") }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name='user_id' value="{{ auth()->user()->id }}">
                <div class="form-group mb-4">
                    <label>Title</label>
                    <input type="text" class="form-control" placeholder="Title" name="title" value="{{ $post->title }}">
                </div>
                <div class="form-group">
                    <label>Category</label>
                    <select class="form-control" name="category_id">
                        <option>Please Select</option>
                        @foreach($cats as $cat)
                        <option value="{{ $cat->id }}" {{ $cat->id == $post->category_id ? 'selected' : '' }}>
                            {{ $cat->title }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mb-4">
                    <label>Period</label>
                    <input type="text" class="form-control" placeholder="" name="period">
                </div>
                <div class="form-group mb-4">
                    <label>Price</label>
                    <input type="text" class="form-control" placeholder="Price" name="price" value="{{ $post->price }}">
                </div>
                <div class="form-group mb-4">
                    <label>Description</label>
                    <textarea class="form-control" rows="6" name="content">
                    {{ $post->content }}
                    </textarea>
                </div>
                <div class="form-group">
                    <label>Upload Image</label>
                    <input type="file" class="form-control-file" value="{{ asset('images/blogimg/' . $post->images) }}" name="images">
                    {{ $post->images }}
                </div>
                <div>
                    <button class="btn btn-primary mt-3" type="submit">Update</button>
                    <a href="{{ url('/admin/post') }}" class="btn btn-secondary mt-3">Back</a>
                </div>
            </form>
        </div>
    </div>

    @endsection