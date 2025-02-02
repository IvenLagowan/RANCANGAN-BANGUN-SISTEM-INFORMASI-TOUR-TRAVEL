@extends('frontend.layouts.master')

@section('title')
{{ $post->title }}
@endsection

@section('content')


<h2 class="home-title">Details Of Packages</h2><hr >
<div class="container mx-6 px-4 bg-white">
    <div class="row mb-4">
        <h4 class="offset-4">Package Name: Travel in <b>{{ $post->title }} </b></h4>
    </div>
    <div class="row tour_detail">
        <div class="col-md-6">
            <img src="{{ asset('images/blogimg/' . $post->images) }}" 
            style="float:left; margin-right: 20px; height: auto;">
        </div>
        <div class="col-md-6">
            <p>Tour Type: <b class="ml-4">{{ $post->category->title }}</b></p>
            <p>Tour Name: <b class="ml-3">{{ $post->title }}</b> in 
                {{ $post->category->title }}</p>
            <p>Price: <b class="ml-5 pl-1">{{ $post->price }} MMK </b></p>
            <p style="text-align:justify;">{!! $post->content !!}</p>
        </div>
    </div>
         <a href="{{ url("booking/$post->id") }}" class="offset-8 btn btn-success text-white col-md-3 mt-3"> Booking တင်မယ်</a>
    </div>
<hr>
<div class="row mb-4">
    @if(auth()->check())
    <div class="col-md-12 mb-3">
        <form action="{{ url('comment/create') }}" method="post">
            @csrf
            <div class="form-group">
                <h4>Reviews</h4>
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                <input type="hidden" name="commendable_id" value="{{ $post->id }}">
                <input type="hidden" name="commendable_type" value="App\post">
                <textarea class="form-control mb-3 mt-3" id="comment" rows="4" name="content"></textarea>
            </div>
            <button type="submit" class="btn btn-primary ">Send</button>
        </form>

    </div>
    @endif

    <div class="col-md-12 text-right">
        <a href="{{ url('/') }}" class="btn btn-primary">Go back</a>
    </div>
</div>

@endsection