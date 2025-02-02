@extends('backend.layouts.master')

@section('title', 'Profile')

@section('content')

<div class="container">

    <div class="row">
        <div class="col-md-8">
            @include('alerts')
            <div class="card">
                <div class="card-header text-center bg-primary">
                    <h4>{{ $user->name }} Profile</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">

                            <!-- <img src="{{ url("images/profile/" . $user->image ) }}"
                            class="img-fluid" style="width: 100px"> -->

                            @if ($user->image)
                            <img src="{{ asset('images/profile/' . $user->image ) }}" class="elevation-2" alt="User Image">
                            @else
                            <img src="{{ asset('dist/img/default-user.jpg') }}" class="elevation-2" alt="User Image">
                            @endif

                        </div>
                        <div class="col-md-8">
                            <table class="table no-border">
                                <tr>
                                    <td>Name</td>
                                    <td>:</td>
                                    <td>{{ $user->name }}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td>{{ $user->email }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- <div class="col-md-12 text-center">
                    <a href="{{ url('admin/profile/edit') }}" class="btn btn-success btn-sm mb-3">
                        <i class="fas fa-edit"></i>
                        Edit
                    </a>
                </div> -->

            </div>




        </div>
    </div>
</div>

@endsection