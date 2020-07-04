<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;

class PertanyaanController extends Controller
{
    public function create(){
        return view('pertanyaan.form');
    }

    public function index(){
        $pertanyaan = PertanyaanModel::get_all();
        
        return view('pertanyaan.tabel', compact('pertanyaan'));
    }

    public function store(Request $request){
        //dd($request->all());
        $new_pertanyaan = PertanyaanModel::save($request->all());

        return redirect('pertanyaan');
    }

    public function show($id){
        $pertanyaan = PertanyaanModel::show($id);

        return view('pertanyaan.show', compact('pertanyaan'));
    }
}
