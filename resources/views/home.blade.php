@extends('layouts.app')

@section('content')
<div class="container">
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
            <!-- Logout button (only visible to authenticated users) -->
            @auth
                <form class="form-inline my-2 my-lg-0" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-danger my-2 my-sm-0" type="submit">Logout</button>
                </form>
            @endauth
        </div>
    </nav>

    <div class="jumbotron jumbotron-fluid" style="background-color: #74b9ff; color: white;">
        <div class="container">
            <h1 class="display-4">Online Donation</h1>
            <p class="lead">This is just a simple donation web with Midtrans.</p>
        </div>
    </div>

    <form class="form-horizontal" id="donation" onsubmit="return submitForm();">
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
@endsection
