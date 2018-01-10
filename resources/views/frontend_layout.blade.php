<!doctype html>
<html lang="{{ app()->getLocale() }}">

    <head>
        <title>Klinik Sambal</title>
    </head>

    <link href="/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="/css/frontend_layout.css" rel="stylesheet" type="text/css">

    @yield('css')

    <body>
        <div class="container">
            <div class="clearfix">
                <h1 class="header-title">Klinik Sambal</h1>
                <div class="header-login">
                    <a href="">Login</a>
                </div>
            </div>
        
        <nav class="navbar navbar-default">
            <ul class="nav navbar-nav">
                <li><a href="#">Category 1</a><li>
                <li><a href="#">Category 2</a><li>
                <li><a href="#">Category 3</a><li>
                <li><a href="#">Category 4</a><li>
            </ul>
        
        </nav>

        </div>
        <div class="container">

        @yield('content')

        </div>

    </body>
