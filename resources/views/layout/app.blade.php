<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    @vite('resources/css/app.css')
    {!! Html::style('https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@300;700&display=swap') !!}
    {!! Html::style('https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap') !!}
</head>
<style>
    body {
        font-family: 'Kanit', sans-serif;
    }
</style>
<body style="background-color:#f0f2f5">
    @include('include.navigation')
    <!-- Main Content --> 
                    {{ $slot }}
        <!-- End Main -->
    @include('include.footer')
</body>
</html>