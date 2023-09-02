<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Dicee</title>
    <link rel="stylesheet" href="{{asset('css/dicee.css')}}">
    <link rel = "icon" href ="{{asset('images/di.png')}}" type = "image/x-icon">
</head>
<body>
    <div class="container">
        <h1>Refresh Me</h1>

        <div class="dice">
            <p>Player 1</p>
            <img class="img1 image360" src="images/dice6.png">
        </div>

        <div class="dice">
            <p>Player 2</p>
            <img class="img2 image360" src="images/dice6.png">
        </div>
    </div>
<button type="submit" onClick="refreshPage()">roll the dice</button>

<footer>
    <div>
        <a href="/">Home</a>
        <a href="/drum">Drum Kit</a>
        <a href="/dicee">Dicee Game</a>
        <a href="/colors">Color Generator</a>
        <a href="/calc">Simple Calc</a>
    </div>
</footer>

<script src="{{asset('js/dicee.js')}}"></script>
</body>
</html>
