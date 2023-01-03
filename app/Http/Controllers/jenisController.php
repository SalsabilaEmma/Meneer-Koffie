<?php

namespace App\Http\Controllers;

use App\Models\Jenis;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class jenisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $jenis=Jenis::all();

        // return view('admin.menu', compact('jenis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
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

        Jenis::create([
            'jenisMenu' => $request->jenisMenu
        ]);

        Session::flash('Data Berhasil Ditambahkan!');
        return redirect()->route('index.menu');
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
    public function update(Request $request, Jenis $jenis, $id)
    {
        $jenis = Jenis::findOrfail($id);
        $jenis->jenis = $request->jenis;
        $jenis->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jenis=Jenis::findOrFail($id);
        $jenis->delete();

        return redirect()->back();
    }
}
