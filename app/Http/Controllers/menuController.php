<?php

namespace App\Http\Controllers;

use App\Models\Booklet;
use App\Models\Jenis;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Session;

class menuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu = Menu::latest()->get();
        $jenis = Jenis::latest()->get();

        $imageBooklet = Booklet::latest()->get();
        return view('admin.menu', compact('menu', 'jenis','imageBooklet'));
    }

    // public function indexBooklet()
    // {
    //     $imageBooklet = Booklet::latest()->get();
    //     return view('admin.menu', compact('imageBooklet'));
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // echo $request->kategori;
        $request->validate([
            'idJenis' => 'required',
            'kategori' => 'required',
            'namaMenu' => 'required',
            'harga' => 'required'
        ]);

        $i = 0;

        foreach ($request->namaMenu as $menu) {
            // echo $request->kategori;
            $menu = Menu::create([
                'idJenis' => $request->idJenis,
                'kategori' => $request->kategori,
                'namaMenu' => $menu,
                // 'harga' => $menu->harga
                'harga' => $request->harga[$i++]
            ]);
        }
        Session::flash('Data Berhasil Ditambahkan!');
        return redirect()->back();
    }
    public function storeBooklet(Request $request)
    {
        // $request->validate([
        //     'image' => 'required|mimes:jpg,bmp,png,jfif,jpeg'
        // ]);

        // if (!File::isDirectory('img/booklet/' . $request->idbooklet)) {
        //     File::makeDirectory('img/booklet/' . $request->idbooklet);
        // }
        // $image = $request->file('image');
        // $namafile = time() . '.' . $image->getClientOriginalExtension();

        // Image::make($image)->resize(300, 300, function ($constraint) {
        //     $constraint->aspectRatio();
        // })->save('img/booklet/' . $namafile);
        // $image->move('img/booklet-original/' . $namafile);

        // $booklet = new Booklet;
        // $booklet->image = $namafile;
        // $booklet->save();

        // Session::flash('message', 'gallery created successfully');
        // return redirect()->back();

        $request->validate([
            "image" => "required|image|mimes:jpeg,png,jpg,gif,svg|max:2048",
        ]);
        $new_name = rand() . '_' . $request->image->getClientOriginalName();

        $request->image->move(public_path('mars-product'), $new_name);

        $booklet = new Booklet;
        // dd($booklet);
        // $booklet->image = $namafile;
        $booklet->save();

        Session::flash('message', 'gallery created successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jenis = Jenis::all();
        $menu = Menu::findOrFail($id);

        return view('admin.editMenu', compact('jenis', 'menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu, $id)
    {
        $menu = Menu::findOrfail($id);
        $menu->idJenis = $request->idJenis;
        $menu->namaMenu = $request->namaMenu;
        $menu->harga = $request->harga;
        $menu->save();

        return redirect()->route('index.menu')->with('Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menu = Menu::findOrFail($id);
        $menu->delete();

        return redirect()->back();
    }
    public function destroyBooklet($id)
    {
        $imageBooklet = Booklet::findOrFail($id);
        $imageBooklet->delete();

        return redirect()->back();
    }
}
