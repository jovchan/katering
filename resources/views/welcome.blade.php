<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @vite('resources/css/app.css')
</head>

<body class="h-screen w-screen">
    <section class="bebas w-96 mx-auto pt-24 justify-between flex">
        <div>
            <p class="text-4xl">menu</p>
            <p class="text-7xl">katering</p>
            <p class="text-7xl">harian</p>
        </div>
        <div></div>
    </section>

    <section class="menu-harian grid grid-cols-2 gap-y-6 mt-4">
        @foreach ($menu as $data)
            <div class=" h-20 flex w-44 mx-auto">
                <img class="rounded-full object-cover w-20 h-20 border-oren-border border-2"
                    src="{{ asset('storage/' . $data->foto_thumb) }}" alt="Menu Image" class="mb-4">
                <div class="ms-6 text-xs align-middle inline my-auto">
                    <p class="font-bold uppercase -translate-x-4 monte">{{ $data->hari }}</p>
                    <ul class="list-disc text-black mont text-xxs font-medium">
                        <li class="capitalize-first">{{ $data->lauk1 }}</li>
                        <li class="capitalize-first">{{ $data->lauk2 }}</li>
                        <li class="capitalize-first">{{ $data->lauk3 }}</li>
                    </ul>
                </div>
            </div>
        @endforeach
    </section>

    <div class="w-96 mx-auto">
        <section class="foott fixed mt-4 left-6 w-96 mx-auto">
            <p class="text-black ms-2 mb-4">Info pemesanan:</p>
            <p class="text-white bg-ijonya px-2 py-1 rounded-xl mb-3 w-52">+62 819-0555-8848 (Liani)</p>
            <p class="text-white bg-ijonya px-3 py-1 rounded-xl inline">@lianihardiani</p>
            <p class="text-black ms-2 mb-5 mt-5 text-xs">*Halal</p>
        </section>
        <img src="{{ asset('photos/1.png') }}" alt="ornamen" class="w-48 fixed right-0">
    </div>
</body>

</html>
