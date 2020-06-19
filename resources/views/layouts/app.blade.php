<html>
<head>
<title>Store | @yield('title')</title>
</head>
    <body>
        @section('sidebar')
        <h1>This is the main sidebar</h1>
        @show

        <div class='container'>
            @yield('content')
        </div>

    </body>
</html>