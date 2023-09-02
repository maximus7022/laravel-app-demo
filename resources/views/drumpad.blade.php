<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Drum Kit</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/drumpad.css') }}" >
    <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
</head>

<body>
<h1 id="title">Drum 🥁 Kit</h1>
<div class="set">
    <button class="w drum">w</button>
    <button class="a drum">a</button>
    <button class="s drum">s</button>
    <button class="d drum">d</button>
    <button class="j drum">j</button>
    <button class="k drum">k</button>
    <button class="l drum">l</button>
</div>

<footer>
    <div>
        <a href="/">Home</a>
        <a href="/drum">Drum Kit</a>
        <a href="/dicee">Dicee Game</a>
        <a href="/colors">Color Generator</a>
        <a href="/calc">Simple Calc</a>
    </div>
</footer>

<script type="text/javascript" src="{{ asset('js/drumpad.js') }}"></script>
</body>
</html>