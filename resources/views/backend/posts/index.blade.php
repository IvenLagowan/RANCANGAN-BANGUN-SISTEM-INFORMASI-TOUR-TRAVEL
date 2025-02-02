@extends('backend.layouts.master')

@section('title', 'View Posts')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{ url('admin/post/create') }}" class="btn btn-primary mb-3 float-right">
                <i class="fa fa-plus-circle mr-1"></i>
                Create New Post
            </a>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-12">

            @include('alerts')

            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Category</th>
                        <th>Images</th>
                        <th>Name</th>
                        <th>Period</th>
                        <th>Price</th>
                        <th>Created at</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->category->title }}</td>
                        <td><img src="{{ asset('images/blogimg/' . $post->images) }}" style="width: 100px;"></td>
                        <td>{{ $post->title }}</td>
                        <td> {{ $post->period }}</td>
                        <td>{{ $post->price }}</td>
                        <td>{{ $post->created_at->format('d - m - Y') }}
                        <td>
                            <a href="{{ url("admin/post/$post->id/edit") }}" class="btn btn-success btn-sm">
                                <i class="fa fa-edit"></i> Edit
                            </a>
                            <a href="{{ url("admin/post/$post->id/delete") }}" class="btn btn-danger btn-sm">
                                <i class="fa fa-trash-alt"></i> Delete
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $posts->links() }}
    </div>
</div>

@endsection