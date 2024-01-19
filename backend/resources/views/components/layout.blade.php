<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href={{ asset('Icon.png') }} type="image/x-icon">
    <title> {{$title}} </title>
    @vite('resources/css/app.css')

</head>
<body class="bg-gradient-to-r from-purple-200 to-zinc-200">
    <div class="">

        {{ $slot }}

    </div>
</body>
</html>
