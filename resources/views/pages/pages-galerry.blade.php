@extends('layouts.app')

@section('title')
<title>Agresia Tailor - Gallery</title>
@endsection

@section('content')
    <!-- parallax -->
    <div class="parallax" style="background-image: url(./images/header2.png);">
        <div class="text-white text-center" id="collection">Our Gallery</div>
    </div>
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

    <!-- gallery section  -->
    <div class="gallery-section">
        <h2 class="text-green text-center">Our Gallery of Tailoring</h2>
        <div class="container-fluid">
            <div class="row">
                <div class="column">
                    <img src="./images/Contact.png" width="100%">
                    <img src="./images/lft-doe-3.JPG" width="100%">
                </div>
                <div class="column">
                    <img src="./images/parallax.jpg" width="100%">
                    <img src="./images/Contact.png" width="100%">
                </div>
                <div class="column">
                    <img src="./images/lft-doe-3.JPG" width="100%">
                </div>
                <div class="column">
                    <img src="./images/parallax.jpg" width="100%">
                </div>
            </div>
        </div>
    </div>
    <!-- end of gallery section  -->

    <!-- make your own design -->
    <div class="make-your-own-section bg-black flex">
        <div class="container">
            <h2 class="text-white text-center">Or you want to make your own?</h2>
            <div class="btn btn-design-you-want bg-green text-white rounded-0 mx-auto d-flex mt-5"><span class="mx-auto">Chat Us What Design You Want</span></div>
        </div>
    </div>

@endsection