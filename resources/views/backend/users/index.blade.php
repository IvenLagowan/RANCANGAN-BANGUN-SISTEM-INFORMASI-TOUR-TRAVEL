@extends('backend.layouts.master')

@section('title', 'View All Users')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{ url('admin/user/create') }}" class="btn btn-primary mb-3 float-right">
                <i class="fas fa-plus-circle mr-1"></i>
                Create New User
            </a>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-12">

            @include('alerts')

            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <!-- <th>Profile</th> -->
                        <th>Email</th>
                        <th>Created at</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <!-- <td><img src="{{ asset('images/profile/' . $user->image) }}" style="width: 60px;"></td> -->
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at->format('d - m - Y')}}
                        <td>
                            <a href="{{ url("admin/user/$user->id/show") }}" class="btn btn-primary btn-sm">
                                <i class="fas fa-eye"></i> View
                            </a>
                            <a href="{{ url("admin/user/$user->id/edit") }}" class="btn btn-success btn-sm">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <a href="{{ url("admin/user/$user->id/delete") }}" class="btn btn-danger btn-sm">
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