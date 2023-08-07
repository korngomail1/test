<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
    @vite(['resources/css/app.css','resources/js/main.js'])
    {!! Html::style('https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@300;700&display=swap') !!}
    {!! Html::style('https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap') !!}
</head>
<style>
    body {
        font-family: 'Kanit', sans-serif;
    }

    .sidebar {
        position: absolute;
        right: 0;
        top: 0;
        width: 25%;
        height: 100%;
        background-color: #1a202c;
        color: white;
        padding: 1rem;
        box-shadow: -4px 0 6px -2px rgba(0, 0, 0, 0.2);
        /* Add shadow to the left */
    }

    .backgourd-shadow {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 0;
        background-color: rgba(0, 0, 0, .45);
    }
</style>

<body style="background-color:#f0f2f5">
    @include('include.navigation')
    <!-- Sidebar -->
    <div class="backgourd-shadow">
        {{-- <div class="sidebar">
            <h1 class="text-xl font-semibold">Sidebar</h1>
            <ul class="mt-4">
                <li class="px-4 py-2 hover:bg-gray-700">Home</li>
                <li class="px-4 py-2 hover:bg-gray-700">About</li>
                <li class="px-4 py-2 hover:bg-gray-700">Services</li>
                <li class="px-4 py-2 hover:bg-gray-700">Contact</li>
            </ul>
        </div> --}}
    </div>
    <!-- Main Content -->
    {{ $slot }}

    <!-- End Main -->
    @include('include.footer')


</body>

</html>
