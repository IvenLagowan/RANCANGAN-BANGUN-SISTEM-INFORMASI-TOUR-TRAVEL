{{-- in layouts folder, mainStructure file has user navigation bar and footer --}}
@extends('layouts/mainStructure')

@section('content')
      <div class="text-center">
        <h2>Papua Tengah Blogs</h2>
        <pre>Kunjungi Blog Kami untuk Menemukan Kisah Menarik, Kearifan Lokal, dan Inspirasi Perjalanan</pre>  
      </div>

      {{-- All blog post --}}
      @include('components.user-components.home-blog')
     
@endsection