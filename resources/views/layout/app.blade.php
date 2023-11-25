<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio</title>
    {{-- bootstrap css  --}}
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
    {{-- font awesome cdn  --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- css link  --}}
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <div>
        @include('components.header')
    </div>
    <div class="container mb-5">
        

        @yield('content')

        
    </div>
    <footer>
        @include('components.footer')
    </footer>

    <script src="{{ asset('bootstrap.min.js') }}"></script>
</body>
</html>