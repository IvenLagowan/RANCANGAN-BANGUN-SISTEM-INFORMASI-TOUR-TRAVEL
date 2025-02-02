@extends('frontend.layouts.master')


@section('content')

<div class="popular_destination_area" >
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_title text-center mb_40">
                    <h2>Travel Packages</h2>
                </div>
            </div>
        </div>
        <div class="row">
                @foreach($posts as $post)
                <div class="col-lg-4 col-md-6">
                    <div class="single_place">
                        <div class="thumb">
                            <img src="{{ asset('images/blogimg/' . $post->images) }}" alt="" class="card-img">
                            <p class="top-right">{{$post->price}}MMK</p>
                        </div>
                        <div class="place_info pb-3">
                            <a href="#"><h4>{{$post->title}}</h4></a>
                            <p class="tourtype"> {{$post->category->title}} </p>
                            <div class="tour_detail d-flex justify-content-between">
                                <a href="{{ url("post/$post->id") }}" ><i class="fa fa-eye"></i>View Details</a>
                                <div class="days">
                                    <i class="fa fa-clock-o"></i>
                                    <a href="#">{{$post->period}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
    </div>
</div>
<div class="row justify-content-center">
        {{ $posts->links() }}
</div>

@endsection