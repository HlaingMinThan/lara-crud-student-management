<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    {{-- bootstrap --}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    {{-- style css --}}
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <!-- navigation -->
    <ul class="nav justify-content-center navbar-dark">
        
        <li class="nav-item">
            <a class="nav-link" href="{{route('index')}}"><h4>Home</h4></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('create')}}"><h4>Create</h4></a>
        </li>
    </ul> 
    @yield('content')
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>