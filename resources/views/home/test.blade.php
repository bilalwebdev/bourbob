<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bourbon Decoded</title>

    <link rel="stylesheet" href="{{ asset('dist/css/home.css') }}">
</head>

<body class="bg-white">


    <div class="grid grid-rows-5">
        <div class="bg-red-500 h-full"></div>
        <div class="bg-red-300 h-full"></div>
        <div class="bg-red-100 h-full"></div>
        <div class="bg-red-700 h-full"></div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-12 mt-20">
        <div class="bg-red-500 h-10 col-span-6"></div>
        <div class="bg-red-300 h-10 col-span-6"></div>
        <div class="bg-red-100 h-10"></div>
        <div class="bg-red-700 h-10"></div>
    </div>
</body>

</html>
