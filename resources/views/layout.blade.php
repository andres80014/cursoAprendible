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
    </style>
    <title>Mi sitio</title>
</head>
<body>

<header>
    <?php function activeMenu($url){
        return  request()->is('/') ? 'active' : '';
    }?>
    <h1>{{ request()->is('/') ? 'Ests en el Home ' : 'No estas en el Home'}}</h1>
    <nav>
        <a href="{{ route('home') }}" class="{{ activeMenu('/') }}">Inicio</a>
        <a href="{{ route('saludos','andres') }} " class="{{ activeMenu('saludos/*') }}">Saludo</a>
        <a href="{{ route('contacto') }} " class="{{ activeMenu('contacto') }}">Contacto</a>
    </nav>
</header>
@yield('contenido')
<footer>Copyright {{date('Y')}} </footer>
</body>
</html>
