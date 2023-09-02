<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/colors.css')}}">
    
    <title>Color Generator</title>
</head>
<body>
    <h1>Color Generator</h1>
    <div id="colordiv"></div>
    <button id="btn">Click to Generate</button>

    <footer>
        <div>
            <a href="/">Home</a>
            <a href="/drum">Drum Kit</a>
            <a href="/dicee">Dicee Game</a>
            <a href="/colors">Color Generator</a>
            <a href="/calc">Simple Calc</a>
        </div>
    </footer>

    <script src="{{asset('js/colors.js')}}"></script>
</body>
</html>