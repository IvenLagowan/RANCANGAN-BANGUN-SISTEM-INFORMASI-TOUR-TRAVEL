@extends('frontend.layouts.master')

@section ('title', 'tours')

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
            <div class="col-lg-4 col-md-6 mb-5">
                    <div class="blog_place bg-white">
                        <h4 class="text-center pt-0">
                            {{$post->category->title}}</h4>  
                        <div class="thumb">
                            <img src="{{ asset('images/blogimg/' . $post->images) }}" alt="" class="blog-img rounded px-0">
                        </div>
                        <div class="place_info">
                            <h5 class="pt-3 pl-3">{{$post->title}}</h5>
                            <div class="tour_detail d-flex justify-content-between ">
                                <a href="">Price <b>{{$post->price}} MMK </b></a>
                                <a href="{{ url("post/$post->id") }}" ><i class="fa fa-eye"></i>View Details</a>
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