<!doctype html>
<html>

<head>
 @vite("resources/css/app.css")


</head>

<body>
<header class="h-15vh bg-emerald-300 flex-row justify betwween">


@guest
<div>
<form action="login" method="POST">
@method ('post')
@csrf
    <input type="text" name="email" placeholder="Email" >
    <input type="text" name="password" placeholder="Password" >
    </form>
    <a href="register">Registrase</a>
</div>
@endguest

@auth
Conectado como {{auth()->User()->name}}

<form action="logout" method="post">
@csrf
    <input type="submit" value="Logout" >
    </form>

@endauth


</header>
<nav class="h-10vh bg-emerald-500 flex flex-row justify-start">
    <a class="w-1/12 bg-gray-800 text-white" href="{{route("alumnos.index")}}">Alumnos</a>

</nav>
<main>
    @yield("contenido")

</main>


    <footer>
   
    </footer>
</body>
</html>

