<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sardar Zadran Plountry Trade</title>

    <link rel="stylesheet" href="{{ URL::asset('frontend/css/app.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('frontend/css/product.css') }}" />


    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet" />

    <style>
    body {
        font-family: 'IBM Plex Sans', sans-serif;

    }
    </style>
</head>

<body class="">
    <div class="container mx-auto ">
        <div class="bg-black py-2 px-2 mt-5">

            <p class="text-white text-center tracking-wider">we offer 10% discount for new users!</p>
        </div>

        @include('frontend.layouts.nav')

        @yield('content')

        <div class="bg-black py-2 px-2 mt-5">

            <p class="text-white text-center tracking-wider">Copyright &copy; Sardar Zadran 2023</p>
        </div>

    </div>

    <!-- @include('frontend.layouts.js.allcdns') -->
    @include('frontend.layouts.js.menu')
    @include('frontend.layouts.js.product')

    @yield('script')
</body>

</html>