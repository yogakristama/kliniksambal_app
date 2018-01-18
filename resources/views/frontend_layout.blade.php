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
                    @if(auth()->check())
                    <a href="/logout"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Logout
                    </a>

                    <form id="logout-form" action="/logout" method="POST" style="...">
                            {{ csrf_field()}}
                    </form>
                    @else
                    <a href="/login">Login</a>
                    @endif

                </div>

                <div class="header-cart">
                <a href="/cart/detail">
                    <span class="glyphicon glyphicon-shopping-cart"></span>
                    <span class="badge" id="cart_count">0</span>
                </a>
                </div>

            </div>
        
        <nav class="navbar navbar-default">
            <ul class="nav navbar-nav navbar-collapse">
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

        <script src="/js/jquery.js" type="text/javascript"></script>
        <script type="text/javascript">

        function refreshCart() {
            $.get('/cart/content', function(data){
                $('#cart_count').html(data.length);

            });
        }
        
        
        </script>
        @yield('js')
    </body>
