<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class JawabanModel {
    public static function get_all(){
        $jawaban = D::table('jawaban')->get();
        return $jawaban;
    }

    public static function save($data){
        //menghilangkan token
        unset($data["_token"]);
        $new_jawaban = DB::table('jawaban')->insert($data);
        return $new_jawaban;
    }
}