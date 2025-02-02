@extends('backend.layouts.master')

@section('title', 'Category')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{ url('admin/category/create') }}" class="btn btn-primary mb-3 float-right">
                <i class="fas fa-plus-circle mr-1"></i>
                Create New Category
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
                        <th>Title</th>
                        <th>Created at</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($category as $cat)
                    <tr>
                        <td>{{ $cat->id }}</td>
                        <td>{{ $cat->title }}</td>
                        <td>{{ $cat->created_at->format('d - M - Y') }}
                        <td>
                            <a href="{{ url("admin/category/$cat->id/edit") }}" class="btn btn-success btn-sm">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <a href="{{ url("admin/category/$cat->id/delete") }}" class="btn btn-danger btn-sm">
                                <i class="fas fa-trash-alt"></i> Delete
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection