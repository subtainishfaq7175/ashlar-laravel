<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

 {{--    <title>{{ config('app.name', 'DonorApp') }}</title> --}}
        <title>DonorApp</title>
    <!--google font-->
    <link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">


    <!--common style-->
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/assets/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <link href="/assets/vendor/themify-icons/css/themify-icons.css" rel="stylesheet">
    <link href="/assets/vendor/weather-icons/css/weather-icons.min.css" rel="stylesheet">

    <!--custom css-->
    <link href="/assets/css/main.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="/assets/vendor/html5shiv.js"></script>
    <script src="/assets/vendor/respond.min.js"></script>
    <![endif]-->
</head>
<body >
<main class="">
    @yield('content')
</main>
</body>
</html>
