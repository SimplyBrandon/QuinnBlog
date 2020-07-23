<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Quinn - @yield('page_title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{  asset('css/app.css') }}">
        @yield('stylesheets')
    </head>
    <body class="font-manrope">
        <header id="sticky-scroll" class="w-full fixed flex items-center text-white py-8 px-10 z-40 transition ease duration-200">
            <a href="{{ route('home') }}"><h2 class="tracking-wide text-2xl text-black"><i class="fa fa-star pr-3"></i> Qui<span class="font-bold">nn</span></h2></a>
            <nav class="flex items-center ml-auto">
                <p class="mr-5">Connect</p>
                <i class="fab fa-facebook mr-8"></i>
                <i class="fab fa-twitter mr-8"></i>
                <div id="open-navigation" class="ml-16 cursor-pointer transition ease duration-200 py-1 px-3 hover:text-black"><i class="fa fa-chevron-left"></i></div>
            </nav>
        </header>
        @yield('content')

        <script type="text/javascript" src="{{  asset('js/app.js') }}"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://kit.fontawesome.com/69ebd03f48.js" crossorigin="anonymous"></script>
        @yield('scripts')
        <script type="text/javascript" src="{{  asset('js/easescroll.js') }}"></script>
        <script type="text/javascript" src="{{  asset('js/global.js') }}"></script>
    </body>
</html>
