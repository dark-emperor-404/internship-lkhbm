<?php

namespace App\Http\Controllers;
use App\Models\Laporan;
use App\Models\User;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $laporan = Laporan::all();
        $user = User::all();
        return view("pages.laporan.index", compact('laporan','user'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = User::all();
        return view("pages.laporan.tambah", compact('user'));
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        laporan::create([
            'name' => $request->name,
            'id_user' => $request->id_user,
            'status' => $request->status,
            'date' => $request->date
        ]);
        return redirect('/laporan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $laporan = Laporan::all();
        return view("pages.laporan.laporan", compact('laporan'));
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $laporan = Laporan::find($id);
        $user = User::all();
        return view('pages.laporan.edit', compact('laporan','user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {   
        $laporan = Laporan::find($id);
        $laporan->update([
            'name' => $request->name,
            'id_user' => $request->id_user,
            'status' => $request->status,
            'date' => $request->date,
        ]);
        return redirect('/laporan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $laporan = Laporan::find($id);
        $laporan->delete();
        return redirect('/laporan');
    }
}
