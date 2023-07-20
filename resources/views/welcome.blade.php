<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }
    </style>
</head>
<body class="antialiased">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Online Donation</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#tentang-kami">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#list"></a>
                </li>
            </ul>
            <ul class="navbar-nav">
                @if (Route::has('login'))
                <li class="nav-item">
                    @auth
                    <a href="{{ route('home') }}" class="nav-link">Home</a>
                    <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    @else
                    <a href="{{ route('login') }}" class="nav-link">Login</a>
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="nav-link">Register</a>
                    @endif
                    @endauth
                </li>
                @endif
            </ul>
        </div>
    </nav>

    <div class="jumbotron jumbotron-fluid" style="background-color: #74b9ff; color: white;">
        <div class="container">
            <h1 class="display-4">Online Donation</h1>
            <p class="lead">This is just a simple donation website with Midtrans.</p>
        </div>
    </div>

    <div class="container">
        <div id="tentang-kami" style="padding-top: 20px;">
            <h2>Tentang Kami</h2>
            <p>
                Selamat datang di website donasi kami. Kami berkomitmen untuk membantu berbagai program donasi yang bermanfaat bagi masyarakat. Dengan bantuan Anda, kami dapat mewujudkan berbagai proyek sosial dan kemanusiaan.
            </p>
            <p>
                Bergabunglah dengan kami dan berikan dukungan Anda untuk berbagai program donasi yang kami selenggarakan. Setiap donasi Anda memiliki dampak besar bagi mereka yang membutuhkan.
            </p>
            <p>
                Bersama-sama kita bisa membuat dunia ini menjadi tempat yang lebih baik. Terima kasih atas kontribusi dan dukungan Anda.
            </p>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+fwq5g3sOrGA7R9M2DxhSl8UDEObE8HsD7Wo49N+MvKZ7hF" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
