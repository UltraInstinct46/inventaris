<?php

namespace App\Http\Controllers;

use App\Jeni;
use Illuminate\Http\Request;

class JeniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenis = Jeni::latest()->paginate(5);
        return view('jenis.index',compact('jenis'))
        ->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('jenis.create');
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
            'nama_jenis' => 'required',
            'kode_jenis' => 'required',
            'keterangan' => 'required',
        ]);
        Jeni::create($request->all());
        return redirect()->route('jenis.index')
        ->with('success','Jenis created Successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Jenis  $jenis
     * @return \Illuminate\Http\Response
     */
    public function show(Jeni $jeni)
    {
        return view('jenis.show',compact('jeni'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Jenis  $jenis
     * @return \Illuminate\Http\Response
     */
    public function edit(Jeni $jeni)
    {
        return view('jenis.edit',compact('jeni'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Jenis  $jenis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jeni $jeni)
    {
        $request->validate([
            'nama_jenis' => 'required',
            'kode_jenis' => 'required',
            'keterangan' => 'required',
        ]);

        $jeni->update($request->all());

        return redirect()->route('jenis.index')
                        ->with('success','Jenis updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Jenis  $jenis
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jeni $jeni)
    {
        $jeni->delete();

        return redirect()->route('jenis.index')
                        ->with('success','Jenis deleted successfully');
    }
}
