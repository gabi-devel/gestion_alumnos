<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>

    <nav class="navbar navbar-expand-lg container-fluid bg-primary">
        <div class="container d-flex justify-content-end navbar-brand">
            <a href="{{ route('alumnos.index') }}" class="nav-link text-light">
                Alumnos
            </a>
            <a href="{{ route('carreras.index') }}" class="nav-link text-light ms-4 me-5">
                Carreras
            </a>
        </div>
      </nav>
    
    <div class="container-md mt-5">
        @yield('content')
    </div>
    
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>