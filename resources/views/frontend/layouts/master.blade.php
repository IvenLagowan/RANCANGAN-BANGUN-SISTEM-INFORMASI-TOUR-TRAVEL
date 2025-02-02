<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="YCvSHTAeJLqXwEfzUVCgYgNcRQCD2XXzE1D9sMHy">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        h1,h2,h3,
        h4,h5,h6,form
        {
            font-family:"Lucida Grande", "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Verdana, sans-serif;
      }

        .slider {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;

            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }

        .bg-white {
            padding: 15px 0;
        }

        .btn-success {
            background-color: #FFA500;
            padding: 5px 30px;
            font-size: 18px;
        }

        .tour_detail {
            margin-bottom: 0;
        }

        .home-title {
            text-align: center;
            margin-bottom: 25px;
            margin-top: 10px;
        }

        .container {
            width: 95%;
            padding: 20 40px;
        }

        nav {
            text-align: center;
            position: fixed !important;
            top: 0;
            lef: 0;
            right: 0;
            height: 70px;
            padding-top: 15px;
            -webkit-box-shadow: 0px 0px 9px 3px rgba(41,41,41,.25);
            -moz-box-shadow: 0px 0px 9px 3px rgba(41,41,41,.25);
            box-shadow: 10px 20px 90px 3px rgba(91,41,41,.25);
            width: 100%;
            z-index: 100;
        }

        nav ul li a {
            color: #000000;
            margin-left: 20px;
            font-family:"Lucida Grande", "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Verdana, sans-serif;
            display: inline-block;
            padding: 0;
            position: relative;
            text-transform: capitalize;
        }

        .navbar-light .navbar-nav .nav-link {
            color: rgba(0,0,0,.5);
        }

        .navbar-light .navbar-nav .nav-link:focus, .navbar-light .navbar-nav .nav-link:hover {
            color: #1ec6b6;
        }

        .navbar-light .navbar-nav .active>.nav-link {
            color: #3490dc;
        }

        .mr-auto {
            padding: 0 20px;
        }

        .nav-item {
            margin-left: 20px;
        }

        .d-block {
            height: 620px;
            position: relative;
            text-align: center;
        }

        .centered  {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 30px;
            color: #F7E935;
            -webkit-box-align: center!important;
            -ms-flex-align: center!important;
            align-items: center!important;
        }

        .dropdown-menu a:link {
            margin: 0;
            padding-left: 10px;
        }

        .section_title h2{
            margin-top: 20px;
            margin-bottom: 20px;
            font-weight: 600px;
        }

        .place_info {
            background-color: #ffffff;
        }

        .single_place {
            margin-bottom: 20px;
            padding-bottom: 10px;

        }

        .tour_detail i {
            font-size: 15px;
            color: #FFA62F;
        }

        .blog_place:hover , .single_place:hover {
            width: 100%;
            background-color: white;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            margin-bottom: 25px;
            cursor: pointer;
            transform: scale(1.05);
            color: red;
        }

        /*popular destination*/
        .popular_destination_area .single_destination {
            position: relative;
            margin-bottom: 30px;
            border-radius: 5px;
            overflow: hidden;
            -webkit-transition: .3s;
            -moz-transition: .3s;
            -o-transition: .3s;
            transition: .3s;
        }

        .popular_destination_area .single_destination .thumb img {
            width: 360px;
            height: 200px;
        }

        .popular_destination_area .single_destination .content p {
            margin-bottom: 0;
            font-size: 22px;
            color: #fff;
            font-weight: 400;
            font-family:"Lucida Grande", "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Verdana, sans-serif;
            -webkit-transition: .3s;
            -moz-transition: .3s;
            -o-transition: .3s;
            transition: .3s;
        }

        .d-flex {
            display: -webkit-box!important;
            display: -ms-flexbox!important;
            display: flex!important;
        }

        .align-items-center {
            -webkit-box-align: center!important;
            -ms-flex-align: center!important;
            align-items: center!important;
        }

        .popular_destination_area .single_destination .content {
            position: absolute;
            left: 30px;
            bottom: 30px;
            z-index: 7;
        }

        .popular_destination_area .single_destination .content p a {
            display: inline-block;
            background: #1ec6b6;
            font-size: 18px;
            border-radius: 30px;
            font-weight: 400;
            padding: 0 12px;
            height: 25px;
            line-height: 25px;
            color: #fff;
            margin-left: 10px;
            -webkit-transition: .3s;
            -moz-transition: .3s;
            -o-transition: .3s;
            transition: .3s;
        }

        .popular_destination_area {
            
            width: 97%;
            background-color: #F8F9F9;
            margin-left: 20px;
        }

        .popular_destination .container {
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
        }

        .top-right {
            position: absolute;
            background: #1ec6b6;
            padding: 7px 18px 4px;
            display: inline-block;
            top: 10px;
            right: 20px;
            -webkit-border-radius: 18px;
            -moz-border-radius: 18px;
            border-radius: 18px;
            color: #fff;
            font-size: 14px;
            -webkit-transition: .3s;
            -moz-transition: .3s;
            -o-transition: .3s;
            transition: .3s;
        }

        .top-right:hover {
            background-color:  #F80B0B;
        }

        .text-center {
            text-align: center !important;
        }

        .card-img, .blog-img {
            vertical-align: middle;
            border-style: none;
            width: 390px;
            height: 170px;
        }

        .place_info h4, .tourtype, .tour_detail {
            padding-left: 15px;
            padding-right: 10px;
        }

        .place_info h4 {
            padding-top: 18px;
            color: #000;
        }

        .tourtype, .tour_detail a {
            font-size: 14px;
            font-weight: 200;
            color: #7a838b;
            margin-top: 2px;
            margin-bottom: 15px;
            text-decoration: none;
        }

        .tour_family a {
            color: #FFA500;
            text-decoration: none;
        }
        .place_info a {
            text-decoration: none;
        }

        .place_info h4:hover {
            color: red;
        }
        /* mouse over link */
        .place_info a:hover {
          opacity: 0.8;
          color: #F80B0B;     
        }

        b, .blog_place h4 {
            font-family:"Lucida Grande", "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Verdana, sans-serif;
            color: #FBB917;

        }

        .custom-select {
            width: 80%;
        }

        .container img {
            vertical-align: middle;
            width: 100%;     

        }

        .container .content {
          position: absolute;
          bottom: 0;
          top: 0;
          background: rgb(0, 0, 0); /* Fallback color */
          background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
          color: #f1f1f1;
          width: 95%;
          
          
         /* padding: 20%;*/
        }

        #myAlert2 {
          position:absolute;
          background-color:#FDFDF9;
          color: green;
          top:0;
          left:0;
          right:0;
          bottom:0;
          margin:0;
          font-size: 20px;
          width:450px;
          height:150px;
          border:1px solid #a1a1a1;
          margin:auto;
          overflow-y:auto;
        }

        #myAlert2 img {
            color: red;
            border-radius: 25px;
            width: 10%;
            border: solid 2px #dbdad7;
            margin-top: 0;
            text-align: center
        }

       
        #footer {
            color: #ffffff;
            background-color: #000;
            text-align: center;

        }

        .footer-section {
            padding: 5px 0;
        }

        /*.footer-bg {
             background: url('images/footer-bg.jpg')no-repeat center; 

            background: url({{ asset('images/footer-bg.jpg')
        }
        }

        );
        background-repeat: no-repeat;
        background-position: center;
        }*/

        .footer-widget {
            margin-bottom: 20px;
        }

        .social-links a {
            width: 300px;
            height: 300px;
            background: #FFA62F;
            padding: 8px 12px;
            margin-left: 5px;
            border-radius: 30px;
            color: #fff;
        }

        .social-links a:hover {
            background: #005ba7;
        }

        .py-4 {
            padding: 30px 0 !important;
        }

        .copyright {
            margin-top: 25px;
        }

        .social h4 {
            margin-bottom: 20px;
        }

        .footer-content h4 {
            margin-bottom: 20px;
        }
    </style>

</head>


<body class="homepage">
    <div id="app">

        @include('frontend.layouts.nav')

        <!------------- Slider ------------>

        @include('frontend.layouts.slider')

        <!-------- End Slider ------------->


        <main class="py-4">
            <div class="container">
                @yield('content')
            </div>
        </main>
    </div>


    <div id="footer">
        @include('frontend.layouts.footer')
    </div>



</body>

</html>