@extends('layout')

@section('konten')
    <div class="max-w-xs mx-auto bg-bgnya h-screen">
        <h4 class="text-5xl">Tambah Menu</h4>

        <form action="{{ route('admin.submit') }}" enctype="multipart/form-data" class="mt-10" method="post">
            @csrf
            <div class="block">
                <label class="mr-16">Foto</label>
                <input type="file" name="foto" class="mb-10">
            </div>
            <div class="block">
                <label class="mr-16">Hari</label>
                <input type="text" name="hari" class="mb-10 input input-bordered">
            </div>
            <div class="block">
                <label class="mr-12">Lauk 1</label>
                <input type="text" name="lauk1" class="mb-10 input input-bordered">
            </div>
            <div class="block">
                <label class="mr-12">Lauk 2</label>
                <input type="text" name="lauk2" class="mb-10 input input-bordered">
            </div>
            <div class="block">
                <label class="mr-12">Lauk 3</label>
                <input type="text" name="lauk3" class="mb-10 input input-bordered">
            </div>
            {{-- <div class="block">
                <label class="mr-12">Lauk 4</label>
                <input type="text" name="lauk4" class="mb-10 input input-bordered">
            </div> --}}

            <button class="btn btn-primary">Tambah</button>
        </form>
    </div>
@endsection
