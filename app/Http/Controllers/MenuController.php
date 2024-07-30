<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{

    function tampil()
    {
        $menu = Menu::all();
        return view('admin.tampil', ['menu' => $menu]);
    }

    function tambah()
    {
        return view('admin.tambah');
    }

    function submit(Request $request)
    {
        $menu = new Menu();
        $fileName = '';

        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $fileName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public', $fileName); // Store the image
        }

        $menu->foto_thumb = $fileName;
        $menu->hari = $request->hari;
        $menu->lauk1 = $request->lauk1;
        $menu->lauk2 = $request->lauk2;
        $menu->lauk3 = $request->lauk3;
        // $menu->lauk4 = $request->lauk4;
        $menu->save();

        return redirect()->route('admin.tampil');
    }

    function edit($id)
    {
        $menu = Menu::find($id);
        return view('admin.edit', compact('menu'));
    }

    function update(Request $request, $id)
    {
        $menu = Menu::find($id);

        // Update other fields regardless of file upload
        $menu->hari = $request->hari;
        $menu->lauk1 = $request->lauk1;
        $menu->lauk2 = $request->lauk2;
        $menu->lauk3 = $request->lauk3;
        // $menu->lauk4 = $request->lauk4;

        // Handle file upload
        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $fileName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public', $fileName);

            // Delete the old image if it exists
            if ($menu->foto_thumb) {
                Storage::delete('public/' . $menu->foto_thumb);
            }

            $menu->foto_thumb = $fileName;
        }

        $menu->update();

        return redirect()->route('admin.tampil');
    }


    function delete($id) {
        $menu = Menu::find($id);
        $menu->delete();
        return redirect()->route('admin.tampil');
    }
}
