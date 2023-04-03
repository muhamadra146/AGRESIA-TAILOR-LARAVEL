<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    @include('include.link')
    @yield('title')
</head>
<body>

    @include('include.navbar')
    @yield('content')
    @include('include.footer')
    @include('include.script-js')
   
</body>

</html>