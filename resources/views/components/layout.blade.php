@props(['user', 'employers'])
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pixel-positions</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..600;1,100..200&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css','resources/js/app.js'])

</head>
<body class="bg-black text-white font-hanken-grotesk pb-10 ">
    <div class="px-10">
        <x-nav.navbar/>
        <main class="mt-10 max-w-[986px] mx-auto ">
            {{$slot}}
        </main>
    </div> 
    <!-- closure -->
</body>
</html>