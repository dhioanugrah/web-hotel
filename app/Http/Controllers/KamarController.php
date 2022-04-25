<?php

namespace App\Http\Controllers;

use App\Models\kamar;
use Illuminate\Http\Request;
use Validator;

class KamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = kamar::select('id','nama_kamar','jum_kamar','harga_kamar')
                ->paginate(100);
        return view('kamar.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kamar.create');
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
            'foto_kamar'=>'required|image|mines:png,jpg,jpeg|dimensions:min_width=1000,min_height=500|between:5 0,1000',
            'jum_kamar'=>'required',
            'harga_kamar'=>'required',
        ]);

        $ext = $request->foto_kamar->getClientOriginalExtension();
        $filename = rand(9,999).'_'.time().'.'.$ext;
        $request->foto_kamar->move('images/kamar/',$filename);

        kamar::create([
            'nama_kamar'=>$request->nama_kamar,
            'foto_kamar'=>$filename,
            'jum_kamar'=>$request->jum_kamar,
            'harga_kamar'=>$request->harga_kamar,
        ]);

        return redirect()->route('kamar.index')->with('status','store');

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
    public function edit(kamar $kamar) 
    {
        return view('kamar.edit',['item'=>$kamar]); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kamar $kamar)
    {
        $validator = Validator::make($request->all(), [
            'nama_kamar'=>'required|min:3',
            'foto_kamar'=>'nullable|image|mines:png,jpg,jpeg|dimensions:min_width=1000,min_height=500|between:5 0,1000',
            'jum_kamar'=>'required',
            'harga_kamar'=>'required',
        ]);

        if ($kamar->foto_kamar && $request->foto_kamar){
            $file = 'images/kamar/'.$kamar->foto_kamar; 

            if (file_exists($file)) {
                unlink($file);
            }
            
        }

        if ($request->foto_kamar){
            $ext = $request->foto_kamar->getClientOriginalExtension();
            $filename = rand(9,999).'_'.time().'.'.$ext;
            $request->foto_kamar->move('images/kamar/',$filename);

            $arr = [
                'nama_kamar'=>$request->nama_kamar,
                'foto_kamar'=>$filename,
                'jum_kamar'=>$request->jum_kamar,
                'harga_kamar'=>$request->harga_kamar,
            ];
        }else{
            $arr = [
                'nama_kamar'=>$request->nama_kamar,
                'jum_kamar'=>$request->jum_kamar,
                'harga_kamar'=>$request->harga_kamar,
            ];
        }

        $kamar::update($arr);

        return redirect()->route('kamar.index')->with('status','update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(kamar $kamar)
    {
        if ($kamar->foto_kamar){
            $file = 'images/kamar/'.$kamar->foto_kamar; 

            if (file_exists($file)) {
                unlink($file);
            }
             
        }

        $kamar->delete();

        return back()->with('status','destroy');
    }
}
