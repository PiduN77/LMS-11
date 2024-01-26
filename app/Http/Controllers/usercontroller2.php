<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usercontroller2 extends Controller
{
    public function view_tugas(){
        return view('siswa.view_tugas');
    }
    public function pengerjaan_quiz(){
        return view('siswa.pengerjaan_quiz');
    }
}
