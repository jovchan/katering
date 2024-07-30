@extends('layout')

@section('konten')
    <div class="max-w-xs mx-auto bg-bgnya">
        <h4 class="text-5xl font-thin text-center">Menu {{ $menu->hari }}</h4>

        <form action="{{ route('admin.update', $menu->id) }}" enctype="multipart/form-data" class="mt-10" method="POST">
            @csrf
            @method('PUT')

            @if ($menu->foto_thumb)
                <img class="rounded-full object-cover w-72 h-72 mx-auto border-pink-500 border-8" src="{{ asset('storage/' . $menu->foto_thumb) }}" alt="Menu Image" class="mb-4">
            @endif

            <div class="block">
                <label class="mr-16">Foto</label>
                <input type="file" name="foto" value="{{ $menu->foto_thumb }}" class="mb-10">
            </div>
            <div class="block">
                <label class="mr-16">Hari</label>
                <input type="text" name="hari" value="{{ $menu->hari }}" class="mb-10 input input-bordered">
            </div>
            <div class="block">
                <label class="mr-12">Lauk 1</label>
                <input type="text" name="lauk1" value="{{ $menu->lauk1 }}" class="mb-10 input input-bordered">
            </div>
            <div class="block">
                <label class="mr-12">Lauk 2</label>
                <input type="text" name="lauk2" value="{{ $menu->lauk2 }}" class="mb-10 input input-bordered">
            </div>
            <div class="block">
                <label class="mr-12">Lauk 3</label>
                <input type="text" name="lauk3" value="{{ $menu->lauk3 }}" class="mb-10 input input-bordered">
            </div>
            {{-- <div class="block">
                <label class="mr-12">Lauk 4</label>
                <input type="text" name="lauk4" value="{{ $menu->lauk4 }}" class="mb-10 input input-bordered">
            </div> --}}

            <button class="btn btn-secondary mb-10">Update</button>
        </form>
    </div>
@endsection
