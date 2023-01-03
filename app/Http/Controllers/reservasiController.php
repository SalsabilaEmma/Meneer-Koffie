<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class reservasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //admin
        $reserv=Reservation::latest()->Paginate(25);
        return view('admin.reservasi', compact('reserv'));
    }
    public function indexDetail($id)
    {
        //user
        $reserv = Reservation::where('id', $id)->first();
        return view('admin.detReserv', compact('reserv'));
    }
    public function indexClient()
    {
        //user
        return view('user.c_reservasi');
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
        // Reservation::create($request->all());

        // $this->validate($request, [
        //     'name' => 'required',
        //     'tanggal' => 'required',
        //     'waktu' => 'required',
        //     'jmlkursi' => 'required',
        //     'wa' => 'required',
        //     'email' => 'required',
        //     'note' => 'required',
        // ]);

        Reservation::create([
            'name' => $request->name,
            'tanggal' => $request->tanggal,
            'waktu' => $request->waktu,
            'jmlkursi' => $request->jmlkursi,
            'wa' => $request->wa,
            'email' => $request->email,
            'note' => $request->note
        ]);

        // Session::flash('Data Berhasil Ditambahkan!');

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
    public function update(Request $request, Reservation $reservation, $id)
    {
        $reservation=Reservation::findOrFail($id);
        $reservation->name = $request->name;
        $reservation->tanggal = $request->tanggal;
        $reservation->waktu = $request->waktu;
        $reservation->jmlkursi = $request->jmlkursi;
        $reservation->wa = $request->wa;
        $reservation->email = $request->email;
        $reservation->note = $request->note;
        $reservation->save();

        return redirect()->route('reservasi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
