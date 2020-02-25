<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .active{
            text-decoration: none;
            color: green;
        }
        .error{
            color:red;
            font-size: 12;
        }
    </style>
    <title>Mi sitio</title>
</head>
<body>

<header>
    <?php function activeMenu($url){
        return  request()->is('/') ? 'active' : '';
    }?>

    <nav>
        <a href="{{ route('home') }}" class="{{ activeMenu('/') }}">Inicio</a>
        <a href="{{ route('saludos','andres') }} " class="{{ activeMenu('saludos/*') }}">Saludo</a>
        <a href="{{ route('messages.create') }} " class="{{ activeMenu('messages/create') }}">Contacto</a>
    </nav>
</header>
@yield('contenido')
<footer>Copyright {{date('Y')}} </footer>
</body>
</html>
