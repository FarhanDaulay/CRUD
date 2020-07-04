<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JawabanModel;

class JawabanController extends Controller
{
    public function index(){
        $jawaban = JawabanModel::get_all();
        
        return view('jawaban.jawab', compact('jawaban'));
    }

    public function store(Request $request){
        //dd($request->all());
        $new_jawaban = JawabanModel::save($request->all());

        return redirect('jawaban');
    }

}