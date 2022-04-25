<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Data::get()->pluck('name', 'id');
        $book = Book::all();
        return view('book.index', compact('book','data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort_if(Gate::denies('book_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $data = Data::get()->pluck('name', 'id');

        $nama_pemesan = $request->get('nama_pemesan');
        $email = $request->get('email');
        $phone = $request->get('phone');
        $nama_tamu = $request->get('nama_tamu');
        $data = Data::get()->pluck('nama_kamar', 'id');
        $timeFrom = $request->get('time_from');
        $timeTo = $request->get('time_to');
        $jum_kamar = $request->get('jum_kamar');

        return view('book.create', compact('nama_pemesan', 'email', 'phone','nama_tamu','data', 'timeFrom', 'timeTo','jum_kamar'));
    // return view('book.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        abort_if(Gate::denies('book_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        Book::create($request->validated());

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
}
