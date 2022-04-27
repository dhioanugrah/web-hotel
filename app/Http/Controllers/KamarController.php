<?php

namespace App\Http\Controllers;

use Validator;
use App\Models\Data;
use App\Models\kamar;
use Illuminate\Http\Request;

class KamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $data = Data::select('id','nama_kamar','jum_kamar','fasilitas_kamar','fasilitas_umum');
        return view('layouts.kamar', compact('data'));
    }
}