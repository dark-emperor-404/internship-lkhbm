<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::all();
        return view("pages.user.index", compact('user'));
    }

    public function profil()
    {
        $user = User::all();
        return view("pages.user.profil", compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("pages.user.tambah");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        user::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'status' => $request->status,
            'date' => $request->date
        ]);
        return redirect('/user');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $user = User::all();
        return view("pages.user.laporan", compact('user'));
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::find($id);
        return view('pages.user.edit', compact('user'));
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'status' => $request->status,
            'date' => $request->date,
        ]);
        return redirect('/user');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/user');
    }
}
