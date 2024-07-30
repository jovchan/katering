<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="font-sans bg-bgnya">
    <a href="{{ route('welcome') }}" class="fixed top-4 left-4"><button class="btn btn-error">Home</button></a>
    <div class="text-5xl text-center p-10 pt-20 font-extrabold">Admin Menu</div>

    <div class="mt-16 mx-auto">
        @yield('konten')
    </div>

</body>
</html>