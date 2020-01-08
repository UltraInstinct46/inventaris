<?php

namespace App\Http\Controllers;

use App\Detailpinjam;
use App\Inventari;
use Illuminate\Http\Request;

class DetailPinjamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detailpinjams = Detailpinjam::latest()->paginate(5);

        return view('detailpinjams.index',compact('detailpinjams'))
            ->with('i',(request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $inventari = Inventari::all();
        return view('detailpinjams.create', compact('inventari'));
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
            'id_inventaris' => 'required',
            'jumlah' => 'required|numeric',
        ]);

        Detailpinjam::create($request->all());

        return redirect()->route('detailpinjams.index')
                        ->with('success','Ruang created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Detail_Pinjam  $detail_Pinjam
     * @return \Illuminate\Http\Response
     */
    public function show(Detailpinjam $detailpinjam)
    {
        return view('detailpinjams.show',compact('detailpinjam'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Detail_Pinjam  $detail_Pinjam
     * @return \Illuminate\Http\Response
     */
    public function edit(Detailpinjam $detailpinjam)
    {
        $inventari = Inventari::all();
        return view('detailpinjams.edit', compact('detailpinjam','inventari'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Detail_Pinjam  $detail_Pinjam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Detailpinjam $detailpinjam)
    {
        $request->validate([
            'id_inventaris' => 'required',
            'jumlah' => 'required|numeric',
        ]);

        $detailpinjam->update($request->all());

        return redirect()->route('detailpinjams.index')
                        ->with('success','Rayon updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Detail_Pinjam  $detail_Pinjam
     * @return \Illuminate\Http\Response
     */
    public function destroy(Detailpinjam $detailpinjam)
    {
        $detailpinjam->delete();

        return redirect()->route('detailpinjams.index')
                        ->with('success','Ruang deleted successfully');
    }
}
