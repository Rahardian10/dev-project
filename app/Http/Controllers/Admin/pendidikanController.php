<?php

namespace App\Http\Controllers\Admin;

use App\Pendidikan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class pendidikanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendidikan = Pendidikan::all();
        return view ('admin/pendidikan/index', compact('pendidikan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pendidikan.create', compact('pendidikan'));
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
            'pendidikan' => 'required'
        ]);


        Pendidikan::create($request->all());
        return redirect('/pendidikan')->with('status', 'Data berhasil di Tambah!!');
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
        $pendidikan = Pendidikan::find($id);
        return view ('admin/pendidikan/edit', compact('pendidikan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'pendidikan' => 'required'
        ]);
        
        $pendidikan = Pendidikan::find($id);
        $pendidikan->update($request->all());
        return redirect('/pendidikan')->with('status', 'Data Berhasil di Edit!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pendidikan = Pendidikan::find($id);
        $pendidikan->delete(); 
        return redirect('/pendidikan')->with('status', 'Data berhasil di Hapus!!!');
    }
}