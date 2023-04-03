@extends('layouts.app')

@section('title')
<title>Agresia Tailor - Collection</title>
@endsection

@section('content')
      <!-- parallax -->
      <div class="parallax" style="background-image: url(./images/header2.png);">
        <div class="text-white text-center" id="collection">Our Collection</div>
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


    <!-- collection section  -->
    <div class="collection-section bg-white">
        <div class="container">
            <h2 class="text-green text-center">Which one do you want to make?</h2>
            <div class="collection-content">
                <div class="row d-flex">
                    <div class="col-lg-3 col-md-4 col-sm-2">
                        <div class="collection-card text-center mx-2">
                            <div class="collection-image bg-green"></div>
                            <p class="text-green mt-2">Blazer Woman - blzwmn01</p>
                            <div class="btn btn-make-this-one bg-green text-white rounded-0">Make this one</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-2">
                        <div class="collection-card text-center mx-2">
                            <div class="collection-image bg-green"></div>
                            <p class="text-green mt-2">Blazer Woman - blzwmn01</p>
                            <div class="btn btn-make-this-one bg-green text-white rounded-0">Make this one</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-2">
                        <div class="collection-card text-center mx-2">
                            <div class="collection-image bg-green"></div>
                            <p class="text-green mt-2">Blazer Woman - blzwmn01</p>
                            <div class="btn btn-make-this-one bg-green text-white rounded-0">Make this one</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-2">
                        <div class="collection-card text-center mx-2">
                            <div class="collection-image bg-green"></div>
                            <p class="text-green mt-2">Blazer Woman - blzwmn01</p>
                            <div class="btn btn-make-this-one bg-green text-white rounded-0">Make this one</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-2">
                        <div class="collection-card text-center mx-2">
                            <div class="collection-image bg-green"></div>
                            <p class="text-green mt-2">Blazer Woman - blzwmn01</p>
                            <div class="btn btn-make-this-one bg-green text-white rounded-0">Make this one</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-2">
                        <div class="collection-card text-center mx-2">
                            <div class="collection-image bg-green"></div>
                            <p class="text-green mt-2">Blazer Woman - blzwmn01</p>
                            <div class="btn btn-make-this-one bg-green text-white rounded-0">Make this one</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-2">
                        <div class="collection-card text-center mx-2">
                            <div class="collection-image bg-green"></div>
                            <p class="text-green mt-2">Blazer Woman - blzwmn01</p>
                            <div class="btn btn-make-this-one bg-green text-white rounded-0">Make this one</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-2">
                        <div class="collection-card text-center mx-2">
                            <div class="collection-image bg-green"></div>
                            <p class="text-green mt-2">Blazer Woman - blzwmn01</p>
                            <div class="btn btn-make-this-one bg-green text-white rounded-0">Make this one</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of collection section -->

    <!-- make your own design -->
    <div class="make-your-own-section bg-black flex">
        <div class="container">
            <h2 class="text-white text-center">Or you want to make your own?</h2>
            <div class="btn btn-design-you-want bg-green text-white rounded-0 mx-auto d-flex mt-5"><span class="mx-auto">Chat Us What Design You Want</span></div>
        </div>
    </div>
@endsection