<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>User </title>

</head>

<body>


    <h1>Hello {{$name}}</h1>
    <h3>Age: {{$age}}</h3>
    <h3>Address: {{$address}}</h3>
</body>

</html>