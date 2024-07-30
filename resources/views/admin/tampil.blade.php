@extends('layout')

@section('konten')
    <div class="container mx-auto bg-bgnya h-screen">
        <div class="flex mx-8">
            <div class="text-4xl">list Menu</div>

            <div class="ms-auto">
                <a class="btn btn-success" href="{{ route('admin.tambah') }}">Tambah Menu</a>
            </div>
        </div>

        <table class="table mt-10">
            <tr>
                <th class="w-6">Hari</th>
                <th>Foto</th>
                <th class="w-6">Lauk1</th>
                <th class="w-6">Lauk2</th>
                <th class="w-6">Lauk3</th>
                {{-- <th class="w-6">Lauk4</th> --}}
                <th class="w-6">EDIT</th>
            </tr>

            @foreach ($menu as $data)
            <tr>
                <td class="font-bold">{{ $data->hari }}</td>
                <td class="w-40"><img src="{{ asset('storage/' . $data->foto_thumb) }}" alt="Menu Image" class="mb-4"></td>
                <td>{{ $data->lauk1 }}</td>
                <td>{{ $data->lauk2 }}</td>
                <td>{{ $data->lauk3 }}</td>
                {{-- <td>{{ $data->lauk4 }}</td> --}}
                <td class="p-0 items-center">
                    <a href="{{ route('admin.edit', $data->id) }}" class="btn btn-warning w-14">Edit</a>
                    <form action="{{ route('admin.delete', $data->id) }}" method="post">
                        @csrf
                        <button class="btn btn-error w-14">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>

    </div>
@endsection
