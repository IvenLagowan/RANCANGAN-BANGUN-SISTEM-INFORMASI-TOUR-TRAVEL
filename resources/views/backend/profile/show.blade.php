@extends('backend.layouts.master')

@section('title', 'Profile')

@section('content')

<div class="container">

    <div class="row">
        <div class="col-md-8">
            @include('alerts')
            <div class="card">
                <div class="card-header text-center bg-primary">
                    <h4>Admin Profile</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            @if (Auth::user()->image)
                            <img src="{{ url("images/profile/" . Auth::user()->image ) }}" class="elevation-2" style="width: 100px">
                            @else
                            <img src="{{ url('dist/img/default-user.jpg') }}" class="elevation-2">
                            @endif

                        </div>
                        <div class="col-md-8">
                            <table class="table no-border">
                                <tr>
                                    <td>Name</td>
                                    <td>:</td>
                                    <td>{{ Auth::user()->name }}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td>{{ Auth::user()->email }}</td>
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