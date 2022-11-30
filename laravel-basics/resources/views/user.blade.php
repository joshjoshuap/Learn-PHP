<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>User </title>
    @vite('resources/css/app.css')
</head>

<body>

    <h1 class="text-3xl font-bold underline">Hello {{$name}}</h1>
    <h3>Age: {{$age}}</h3>
    <h3>Address: {{$address}}</h3>
</body>

</html>