<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TodoLists</title>

    {{-- CSS and Customs CSS --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    {{-- nav --}}
    @include('layouts.nav')
    
    {{-- content --}}
    @yield('content')

    {{-- footer --}}
    <footer class="footer bg-secondary p-2 my-5 text-center">
        <p class="m-0 p-0">Copyright &copy; 2017 TodoLists</p>
    </footer>

</body>
</html>