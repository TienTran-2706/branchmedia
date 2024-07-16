<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>The Branch Media</title>
        @vite(['resources/js/app.js', 'resources/css/app.css'])
        <link rel="icon" type="image/x-icon" href="{{ Vite::asset("resources/images/favicon.png")}}">

</head>
<body class="bg-background w-full min-h-[100vh] flex flex-col justify-between items-center">
    <div class="w-full">
        <x-header/>

        <main class="w-full">
            {{ $slot }}
        </main>


        <x-footer/>

    </div>
</body>
</html>
