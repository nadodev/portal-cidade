<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    @vite(['resources/js/app.js',  "resources/css/app.css"])

    {{ \Illuminate\Support\Facades\Vite::useHotFile('site.hot')->useBuildDirectory('site')->asset('resources/css/app.css') }}
</head>
<body>
<h1 class="text-green-500 font-bold">Home do site</h1>
</body>
</html>
