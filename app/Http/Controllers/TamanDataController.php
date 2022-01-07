<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Judul;
use App\Models\Kategori;
use App\Models\Tahun;
use App\Models\User;
use App\Models\Values;
use App\Models\Variabel;

use Inertia\Inertia;

class TamanDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
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
    public function update(Request $request, $id)
    {
        //
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

    public function submitTahun(Request $request){
        $tahun = new Tahun;
        $tahun->tahun = $request->tahun;
        $tahun->save();

        return redirect('dashboard');
    }

    public function deleteMultipleTahun(Request $request){
        $array = (array)$request;
        foreach ($array['request'] as $key => $value) {
            $tahun = new Tahun;
            $tahun = $tahun->where('id', $value['id'])->delete();           
        }
        return redirect('dashboard');
    }


    public function submitKategori(Request $request){
        $kategori = new Kategori;
        $kategori->kategori = $request->kategori;
        $kategori->save();

        return redirect('dashboard');
    }

    public function deleteMultipleJudul(Request $request){
        $array = (array)$request;
        foreach ($array['request'] as $key => $value) {
            $judul = new Judul;
            $judul = $judul->where('id', $value['id'])->delete();           
        }
        return redirect('dashboard');
    }

    public function submitJudul(Request $request){
        // dd($request->kategori['id']);
        $judul = new Judul;
        $judul->judul = $request->judul;
        $judul->kategori_id= $request->kategori['id'];
        $judul->tahun_id= $request->tahun['id'];
        $judul->save();

        return redirect('dashboard');
    }

    public function submitVariabel(Request $request){
        // dd($request->judul['id']);
        $variabel = new Variabel;
        $variabel->variabel = $request->variabel;
        $variabel->judul_id = $request->judul['id'];
        $variabel->save();

        return redirect('createtable');
    }

    public function deleteMultipleVariabel(Request $request){
        $array = (array)$request;
        foreach ($array['request'] as $key => $value) {
            $variabel = new Variabel;
            $variabel = $variabel->where('id', $value['id'])->delete();           
        }
        return redirect('dashboard');
    }

    public function getVariabel( $request){
        // dd(gettype((int)$request->judul['id']));
        // dd(gettype($request));
        $variabel = new Variabel;
        $variabel = $variabel::with(['values'])->where('judul_id', (int)$request)->get();

        // dd($variabel);
        return $variabel;
    }

    public function getJudul (Request $request){
        // dd(json_decode($request->kategori)->id);
        // dd(json_decode($request->tahun)->id);
        $judul = new Judul;
        $judul = $judul::with(['tahun', 'kategori', 'variabel'])
        ->where('kategori_id', json_decode($request->kategori)->id)
        ->where('tahun_id', json_decode($request->tahun)->id)
        ->get();
        
        return $judul;
    }

    public function submitValue(Request $request){
        // dd($request->judul['id']);
        // dd($request->value);
        $valuex = new Values;
        $valuex = $valuex->orderBy('created_at', 'desc')->first();
        // dd($valuex);
        if ($valuex == null) {
            $index = 1;
        } else {
            $index = $valuex->index + 1;
        }
        
        foreach ($request->value as $key => $value) {
            // dd($value[0]);
            $valuex = new Values;
            $valuex->value = $value[0]['value'];
            $valuex->variabel_id = $value[0]['variabelId'];
            $valuex->index = $index;
            $valuex->save();

        }
       

        return redirect('createtable');
    }

    public function deleteMultipleValue(Request $request){
        $array = (array)$request;
        foreach ($array['request'] as $key => $value) {
            $variabel = new Variabel;
            $variabel = $variabel->where('id', $value['id'])->delete();           
        }
        return redirect('dashboard');
    }
 



}
