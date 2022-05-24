<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;
use Validator;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request['search'] ?? "";
        if($search !=""){
            $book = Book::where('nama_pemesan','LIKE', "%$search%")->orWhere('time_from','LIKE', "%$search%")->get();
        }else{
            $book = Book::all();
        }
        // $data = Data::get()->pluck('nama_kamar', 'id');
   
        return view('book.index', compact('book'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $data = Data::get()->pluck('nama_kamar', 'id');

        $nama_pemesan = $request->get('nama_pemesan');
        $email = $request->get('email');
        $phone = $request->get('phone');
        $nama_tamu = $request->get('nama_tamu');
        // $data_id = Data::get()->pluck('nama_kamar', 'id');
        $data_id = $data;
        $time_from = $request->get('time_from');
        $time_to = $request->get('time_to');
        $jum_kamar = $request->get('jum_kamar');

        return view('book.create', compact('nama_pemesan', 'email', 'phone','nama_tamu','data_id', 'time_from', 'time_to','jum_kamar'));
    // return view('book.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Book $book,Request $request)
    {
        $data = Data::get()->pluck('nama_kamar', 'id');

        $validator = Validator::make($request->all(), [
            'nama_pemesan'=>'required|min:3',
            'email'=>'required|email|min:3',
            'phone'=>'required|min:10',
            'nama_tamu'=>'required|min:3',
            'data_id'=>'required|string',
            'time_from'=>'required|date_format:Y-m-d',
            'time_to'=>'required|date_format:Y-m-d',
            'jum_kamar'=>'required',
        ]);


        Book::create([
            'nama_pemesan'=>$request->nama_pemesan,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'nama_tamu'=>$request->nama_tamu,
            'data_id'=>$request->data_id,
            'time_from'=>$request->time_from,
            'time_to'=>$request->time_to,
            'jum_kamar'=>$request->jum_kamar,

        ]);

        return redirect()->route('book.index')->with([
            'message' => 'successfully created !',
            'alert-type' => 'success'
        ]);
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
    public function edit(Book $book)
    {
        return view('book.edit',['book'=>$book]); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $book->status = $request->input('status');

        $book->update();
        return redirect()->route('book.index')->with([
            'message' => 'successfully updated !',
            'alert-type' => 'info'
        ]);
    }

    /**     
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        
        $book->delete();

        return redirect()->route('book.index')->with([
            'message' => 'successfully deleted !',
            'alert-type' => 'danger'
        ]);
    }

    // public function massDestroy(Request $request)
    // {
        
    //     Book::whereIn('id', request('ids'))->delete();

    //     return response()->noContent();
    // }
}
