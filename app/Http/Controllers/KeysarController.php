<?php

namespace App\Http\Controllers;

use App\Models\keysar;
use Illuminate\Http\Request;

class KeysarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $keysar = keysar::all();
        return view('keysar.index', compact('keysar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('keysar.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nama'=>'required',
            'dkr'=>'required',
        ]);
        $keysar = keysar::create($request->all());
        return redirect()->route('keysar.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(keysar $keysar, $id)
    {
        //
        $keysar = keysar::find($id);
        return view('keysar.show', compact('keysar'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(keysar $keysar, $id)
    {
        //
        $keysar = keysar::find($id);
        return view('keysar.edit',compact('keysar'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, keysar $keysar, $id)
    {
        //
        $request->validate([
            'nama'=>'required',
            'dkr'=>'required',
        ]);
        $keysar = keysar::find($id);
        $keysar->update($request->all());
        return redirect()->route('keysar.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(keysar $keysar, $id)
    {
        //
        $keysar = keysar::find($id)->delete();
        return back();
    }
}
