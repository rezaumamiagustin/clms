<?php

namespace App\Http\Controllers;

use App\Models\Tugas;
use Illuminate\Http\Request;

class TugasController extends Controller
{
    public function tambah(Tugas $tugas){
        return view('s_tugas', ['tugas' => $tugas]);  
    } 

    public function lihat($id){
        $tugas = Tugas::find($id); 
        return view('s_tugas')-> with(array('tugas'=>$tugas));
    }

    public function simpan(Request $input){
        $tugas=new Tugas();
        $tugas->nama_tugas=$input->nama_tugas;
        $tugas->end_date=$input->end_date;
        $tugas->save();
        return redirect('s_tugas'); 
    }
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
}
