<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio</title>
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
</head>
<body>
    <header>
        <div class="wrapper">
            <div class = nav>
                <a href="/"> <h2>Home</h2> </a>
                <a href="/about"> <h2>About Me</h2> </a>
            </div>
            <div>
                <h2 class="underlineAnim">Simona Pavlova's Portfolio Site</h2>
            </div>
        </div>
    </header>

    @yield('content')

    <footer>
        <div class="footer">
            <div class="socials">
                <i class="fa-brands fa-facebook"></i>
                <span class="name">Simona Pavlova</span>  <br>
                <i class="fa-brands fa-instagram"></i>
                <span class="name">xximoni</span>
            </div>
        </div>
    </footer>
    <script src="{{ asset('js/home.js')}}"></script>
</body>
</html>
