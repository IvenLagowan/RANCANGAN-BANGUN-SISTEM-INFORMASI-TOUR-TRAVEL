<nav class="navbar navbar-expand-md navbar-light bg-white shadow mb-5 rounded py-3">
    <div class="container-fluid">
        <div class="col-md-3">
            <a class="navbar-brand p-0" href="{{ url('/') }}">
                <img src="{{ asset('images/logo.png') }}" width="60" height="60" alt="logo">
                <b style="font-size: 20px; color:#FBB917" class="shadow-lg py-1 mb-5 rounded bg-white">Where you want to go?</b>
            </a>
        </div>


        <div class="col-md-6" >
            <div class="collapse navbar-collapse ml-2" id="navbarSupportedContent" >
                <ul class="navbar-nav ml-5">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/') }}">HOME <span class="sr-only">(current)</span></a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="{{ url('about-us') }}">About us <span class="sr-only">(current)</span></a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('blog') }}">TOURS <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('contact-us')}}">CONTACT<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                          <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            TOUR TYPES
                          </a>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            @foreach($categories as $category)
                                <a class="dropdown-item" href="{{route('family',$category->id)}}">
                                {{$category->title}}</a>   
                            @endforeach

                          </div>
                        </div>

                    </li>
                </ul>
            </div>
        </div>

        <div class="collapse navbar-collapse ml-2" id="navbarSupportedContent" >
            <ul class="navbar-nav ml-5">
                <!-- Authentication Links -->
                <li class="nav-item ml-5 pl-5">
                    <a class="nav-link" href="{{ asset('/login') }}">LOGIN</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link btn btn-primary text-white" href="http://localhost/blogsystem/public/register">Register</a>
                </li> -->

                <!-- <li class="nav-item">
                    <a class="nav-link"  data-slide="true" href="{{ 'logout' }}"> -->
                    <!-- <i class="fas fa-user-circle mr-2"></i> --><!-- Logout
                    </a>
                </li>     -->
            </ul>
        </div>
    </div>
</nav>