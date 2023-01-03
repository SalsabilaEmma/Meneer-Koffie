<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;

class galleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $image=Gallery::latest()->get();
        return view('admin.gallery', compact('image'));
    }

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
        $request->validate([
            'image' => 'required|mimes:jpg,bmp,png,jfif,jpeg'
        ]);

        if (!File::isDirectory('img/gallery/' . $request->idgallery)) {
            File::makeDirectory('img/gallery/' . $request->idgallery);  //bikin folder
        }
        $image = $request->file('image');
        $namafile = time() . '.' . $image->getClientOriginalExtension();

        Image::make($image)->resize(300, 300, function ($constraint) {  //iki nggo tamnel
            $constraint->aspectRatio();
        })->save('img/gallery/' . $namafile);
        $image->move('img/gallery-original/' . $namafile); //iki file asli, lak pengen di cilikne gari madakne seng duwur e

        $gallery = new Gallery;
        // $gallery->idgallery = $request->idgallery;
        $gallery->image = $namafile;
        $gallery->save();

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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery, $id)
    {
        $gallery = Gallery::findOrFail($id);
        $gallery->id = $request->id;
        $gallery->image = $request->image;
        $gallery->save();

        return redirect('index.gallery')->with('sukses', 'Data Berhasil Diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);
        $gallery->delete();

        return redirect()->back();
    }
}
