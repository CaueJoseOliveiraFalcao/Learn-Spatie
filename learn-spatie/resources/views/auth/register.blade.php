
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        
    </head>
    <body class="antialiased">
       <form action="/register" method="POST">
        <h1>Registrar</h1>
        @csrf
            <label for="name">Name :</label>
            <input type="text" name="name"> 
            <label for="email">Email :</label>
            <input type="email" name="email"> 
            <label for="password">Password :</label>
            <input type="password" name="password"> 
            <input type="submit" value="Enviar">
       </form>
       <a href="/">Já tem um login?</a>
    </body>
</html>
