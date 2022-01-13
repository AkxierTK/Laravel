<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Dwes WEB</h1>
    <nav>
    <a href={{ route('inicio') }}>Inicio</a>
    <a href={{ route('nosotros') }}>About Us</a>
    <a href={{ route('proyecto') }}>Proyecto</a>
    </nav>
        @yield('apartado')
</body>
</html>