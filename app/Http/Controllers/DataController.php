<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DataController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Data::select('id','nama_kamar','jum_kamar','fasilitas_kamar','fasilitas_umum')
                ->paginate(100);
        return view('data.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('data.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_kamar'=>'required|min:3',
            'jum_kamar'=>'required',
            'fasilitas_kamar'=>'required|min:3',
            'fasilitas_umum'=>'required|min:3',
        ]);


        Data::create([
            'nama_kamar'=>$request->nama_kamar,
            'jum_kamar'=>$request->jum_kamar,
            'fasilitas_kamar'=>$request->fasilitas_kamar,
            'fasilitas_umum'=>$request->fasilitas_umum,
        ]);

        return redirect()->route('data.index')->with('status','store');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Data $data)
    {
        return view('data.edit',['item'=>$data]); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //     $validator = Validator::make($request->all(), [
        //         'nama_kamar'=>'required|min:3',
        //         'jum_kamar'=>'required',
        //         'fasilitas_kamar'=>'required|min:3',
        //         'fasilitas_umum'=>'required|min:3',
        //     ]);

        //     Data::update([
        //     'nama_kamar'=>$request->nama_kamar,
        //     'jum_kamar'=>$request->jum_kamar,
        //     'fasilitas_kamar'=>$request->fasilitas_kamar,
        //     'fasilitas_umum'=>$request->fasilitas_umum,
        // ]);
        $data = Data::find($id);
        
        
        $data->nama_kamar = $request->input('nama_kamar');
        $data->jum_kamar = $request->input('jum_kamar');
        $data->fasilitas_kamar = $request->input('fasilitas_kamar');
        $data->fasilitas_umum = $request->input('fasilitas_umum');
        
        $data->update();
        return redirect()->route('data.index')->with('status','update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Data::find($id);
        $data->delete();
        return redirect()->route('data.index')->with('status','update');
    }
}
