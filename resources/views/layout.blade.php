<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mi sitio</title>
</head>
<body>

<header>
    <nav>
        <a href="/">Inicio</a>
        <a href="<?php echo route('saludos','andres')?>">Saludo</a>
        <a href="<?php echo route('contacto')?>">Contacto</a>
    </nav>
</header>
@yield('contenido')
<footer>Copyright {{date('Y')}} </footer>
</body>
</html>
