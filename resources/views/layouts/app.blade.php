<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <!-- Latest compiled and minified CSS -->


    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
           <div class="container">
               <div class="row">
                   <div class="col-lg-4">
                       <ul class="list-group">
                            <li class="list-group-item">
                               <a href="/home">Home</a>
                           </li>
                           <li class="list-group-item">
                               <a href="/post/create">Create new post</a>
                           </li>
                       </ul>
                   </div>
                   <div class="col-lg-8">
                       @yield('content')
                   </div>
               </div>
           </div>
        </nav>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
