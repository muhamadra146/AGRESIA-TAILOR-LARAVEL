@extends('layouts.app')

@section('title')
<title>Agresia Tailor - Home</title>
@endsection

@section('content')
    <!-- header -->
    <div class="section-header" style="background-image: url(./images/header-image.png);">
        <div class="header-content container text-white">
            <h1>Create Your Own Fashion</h1>
            <p>We had working many years for tailoring a clothing as you need. You can custom your cloth </p>
            <a href="./collection.html" style="text-decoration: none;">
                <div class="btn create-now bg-green rounded-0 text-white">CREATE NOW</div>
            </a>
        </div>
    </div>
    <!-- end of header  -->

    <!-- divide -->
    <div class="divide bg-black text-white">
        <div class="container">
            <h2>Specializing in customize</h2>
            <p>We had working many years for tailoring a clothing as you need. You can custom your cloth </p>
        </div>
    </div>

    <!-- why us  -->
    <div class="section-why-us bg-gray">
        <div class="container">
            <h2 class="text-green text text-center">Why Us</h2>
            <div class="row text-center why-us-content">
                <div class="col-lg-4 col-md-6 col-sm-4">
                    <div class="card-why bg-green text-white px-5">
                        <p class="title">Custom Suites</p>
                        <p>You can customize your fashion be more than just fashion</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-4">
                    <div class="card-why bg-green text-white px-5">
                        <p class="title">Custom Suites</p>
                        <p>You can customize your fashion be more than just fashion</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-4">
                    <div class="card-why bg-green text-white px-5">
                        <p class="title">Custom Suites</p>
                        <p>You can customize your fashion be more than just fashion</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of why us  -->

    <!-- parallax -->
    <div class="parallax" style="background-image: url(./images/parallax.jpg);"></div>
    <!-- end of parallax  -->

    <!-- get connected  -->
    <div class="divide-connected bg-black text-white">
        <div class="container d-flex">
            <div class="text-content">
                <h2>Get connected with us.</h2>
                <p>You can ask with us for any information about us.</p>
            </div>
            <a href="./contact.html" style="text-decoration: none;" class="ml-auto my-auto">
                <div class="btn btn-text-us text-white bg-green rounded-0 ">Text Us!</div>
            </a>
        </div>
    </div>
    <!-- end of get connected -->
@endsection