@extends('frontend.layouts.master')

@section ('title')
{{$category->title}}

@section('content')

<div class="container">
    <h3 class="home-title">{{$category->title}} Packages</h3>
    <div class="row bg-white">
            @foreach($posts as $post)
            <div class="col-lg-4 col-md-6 mb-5">
                    <div class="blog_place bg-white">
                        <h4 class="text-center pt-0">
                            {{$post->category->title}}</h4>  
                        <div class="thumb">
                            <img src="{{ asset('images/blogimg/' . $post->images) }}" alt="" class="blog-img rounded">
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

    <div class="row justify-content-center">
        {{ $posts->links() }}
    </div>

</div>

@endsection