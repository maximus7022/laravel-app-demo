<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "icon" href ="{{asset('images/blackhole.png')}}" type = "image/x-icon">
    <link rel="stylesheet" href="{{asset('../css/home.css')}}">
    <title>Home page</title>
</head>
<body>
    <section class="showcase">
        <header>
            <h2 class="logo">Maxim Pashynkyi's</h2>
            <div class="toggle"></div>
        </header>
        <video src="{{asset('video/bg.mp4')}}" muted loop autoplay></video>
        <div class="overlay"></div>
        <div class="text">
            <h2>Soft Serve IT Academy</h2> 
            <h3>Demo Project</h3>
            <p>Here, I've combined several simple web applications
            into one Laravel project and automated the process of building
            and deploying it using Jenkins and Docker.</p>
            <a class="expl" href="#">Explore projects</a>
        </div>
    </section>
    <div class="menu">
        <ul>
            <li><a href="/drum">Drum Kit</a></li>
            <li><a href="/dicee">Dicee Game</a></li>
            <li><a href="/colors">Color Generator</a></li>
            <li><a href="/calc">Simple Calc</a></li>
        </ul>
    </div>
    <script src="{{asset('js/home.js')}}"></script>
</body>
</html>