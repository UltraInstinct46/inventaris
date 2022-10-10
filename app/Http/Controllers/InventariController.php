<?php

namespace App\Http\Controllers;
use PDF;
use App\Inventari;
use App\Jeni;
use App\Ruang;
use App\User;
use Illuminate\Http\Request;

class InventariController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inventaris = Inventari::latest()->paginate(5);

        return view('inventaris.index',compact('inventaris'))
            ->with('i',(request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jeni = Jeni::all();
        $ruang = Ruang::all();
        $user = User::all();
        return view('inventaris.create', compact('jeni','ruang','user'));
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
            'nama' => 'required',
            'kondisi' => 'required',
            'keterangan' => 'required',
            'jumlah' => 'required',
            'id_jenis' => 'required',
            'id_ruang' => 'required',
            'id_petugas' => 'required',
        ]);
        
        try {
            Inventari::create($request->all());
        } catch (\Exception $e) {
            \Log::error($e);
            return "Something went wrong";
        }

        return redirect()->route('inventaris.index')
                        ->with('success','Inventaris created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Inventaris  $inventaris
     * @return \Illuminate\Http\Response
     */
    public function show(Inventari $inventari)
    {
        $inventaris = Inventari::all();
        $pdf = PDF::loadView('inventaris.show', compact('inventari','inventaris'))->setPaper('A4', 'landscape');
        return $pdf->stream('inventaris-pdf');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Inventaris  $inventaris
     * @return \Illuminate\Http\Response
     */
    public function edit(Inventari $inventari)
    {
        $jeni = Jeni::all();
        $ruang = Ruang::all();
        $user = User::all();
        return view('inventaris.edit', compact('inventari','jeni','ruang','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Inventaris  $inventaris
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inventari $inventari)
    {
        $request->validate([
            'nama' => 'required',
            'kondisi' => 'required',
            'keterangan' => 'required',
            'jumlah' => 'required',
            'id_jenis' => 'required',
            'id_ruang' => 'required',
            'id_petugas' => 'required',
        ]);

        $inventari->update($request->all());

        return redirect()->route('inventaris.index')
                        ->with('success','Rayon updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Inventaris  $inventaris
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inventari $inventari)
    {
        $inventari->delete();

        return redirect()->route('inventaris.index')
                        ->with('success','Ruang deleted successfully');
    }
}
