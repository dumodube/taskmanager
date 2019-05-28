<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>{{config('app.name','TicketMaster')}}</title>

    </head>
    <body>
            @include('nav.usersnav')
            <div class="container">
                @yield('content')
            </div>
        
    </body>
</html>
