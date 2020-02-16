<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latest News</title>
    <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">
    <link href="{{asset('css/homepage/video.css')}}" rel="stylesheet">
    {{-- <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <link href="{{ asset('css/table.css') }}" rel="stylesheet">
    <link href="{{ asset('css/profile.css') }}" rel="stylesheet">
    <link href="{{ asset('css/quote.css') }}" rel="stylesheet"> --}}



    {{-- assignment2 scripts --}}
    {{-- <script src="{{ asset('js/quote.js') }}"> </script> --}}



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    {{-- <script src="{{ asset('js/sidebar.js') }}" defer></script> --}}


    {{-- homepage vieo script --}}
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"> </script>
    <script src="{{ asset('js/homepage/video.js') }}"></script>





</head>

<aside class="sidebar">
  <div id="leftside-navigation" class="nano">
    <ul class="nano-content">
      <li>
        <a href="/"></i><span>Home</span></a>
      </li>
      <li>
        <a href="/profile"><span>Profile</span></a>
      </li>
     
     
    </ul>
  </div>
</aside>

<div class="content">
  @yield('Medical_News')
  @yield('table')
  @yield('profile')
  @yield('quote')

</div>
</html>