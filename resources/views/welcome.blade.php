<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Simple Donation with Midtrans</title>

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
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

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

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Online Donation</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#create">Donation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#list">Donation List</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="jumbotron jumbotron-fluid" style="background-color: #74b9ff; color: white;">
        <div class="container">
            <h1 class="display-4">Online Donation</h1>
            <p class="lead">This is just simple donation web with Midtrans.</p>
        </div>
    </div>

    <div class="container">

        <form class="form-horizontal" id="donation" onsubmit="return submitForm();">

            <!-- Form Name -->
            <legend>Donation</legend>

            <div class="row">
                <div class="col-md-4">

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="control-label" for="donor_name">Donor Name</label>
                        <div>
                            <input id="donor_name" name="donor_name" type="text" placeholder="Enter your name.." class="form-control input-md"
                                required="">

                        </div>
                    </div>

                </div>

                <div class="col-md-4">

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="control-label" for="donor_email">Donor Email</label>
                        <div>
                            <input id="donor_email" name="donor_email" type="text" placeholder="Enter your email.." class="form-control input-md"
                                required="">
    
                        </div>
                    </div>
    
                </div>

                <div class="col-md-4">

                    <!-- Select Basic -->
                    <div class="form-group">
                        <label class="control-label" for="donation_type">Type</label>
                        <div>
                            <select id="donation_type" name="donation_type" class="form-control">
                                <option value="infak_kemanusiaan">Infak Kemanusiaan</option>
                                <option value="infak_pendidikan">Infak Pendidikan</option>
                                <option value="infak_kesehatan">Infak Kesehatan</option>
                            </select>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-md-6">

                    <!-- Prepended text-->
                    <label for="">Amount</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Rp</span>
                        </div>
                        <input id="amount" name="amount" class="form-control" placeholder="" type="number" min="10000" max="999999999" required="">
                    </div>

                </div>
                <div class="col-md-6">

                    <!-- Textarea -->
                    <div class="form-group">
                        <label class="control-label" for="note">Note (Optional)</label>
                        <div>
                            <textarea class="form-control" id="note" name="note"></textarea>
                        </div>
                    </div>

                </div>
            </div>

            <button id="submit" class="btn btn-success">Submit</button>

        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
