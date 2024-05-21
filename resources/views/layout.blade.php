<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Officials</title>
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">

    <style>

       #main-nav {
            display: flex;
            justify-content: space-around;
            margin-top: 10px;
        }

        #main-nav a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            font-size: 1.2rem;
            transition: background-color 0.3s, color 0.3s;
        }

        #main-nav a:hover {
            background-color: #495057;
            border-radius: 5px;
        }

        .active {
            background-color: rgb(109, 111, 111);
            border-radius: 5px;
        }




    </style>

</head>
<body>

    <div id="main">
        <div id="upbar">
            <div id="title">

                <h1>Barangay Officials</h1>
            </div>

            <nav id="main-nav">
                <a href="{{ url('/home') }}" class="{{ Request::is('home') ? 'active' : '' }}">Home</a>
                <a href="{{ url('/officials') }}" class="{{ Request::is('officials') ? 'active' : '' }}">Officials</a>

                <a href="{{ url('/about') }}" class="{{ Request::is('about') ? 'active' : '' }}">About</a>
            </nav>
        </div>


        <div id="content">
            @yield('content')

        </div>
    </div>

</body>
</html>
