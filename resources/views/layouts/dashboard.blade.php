<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ trans('translate.app_name') }}</title>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    @include('layouts.head')
</head>
<body>
    <div id="app">
        <header>
            @include('dashboard.layouts.navbar')
        </header>

        <main class="body slide">
            <aside class="sidebar show perfectScrollbar">
                @include('dashboard.layouts.sidebar')
            </aside>
            <div class="container-fluid">
                <div class="row">
                    @yield('content')
                </div>
            </div>
            
        </main>
    </div>
    @include('layouts.footer')
</body>
</html>
