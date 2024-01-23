<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    //
    public function index()
    {
        return view('admin');
    }

    public function datatable($class)
    {
        $fk = array(
            "Answer"=>array("User", "Post"),
            "File"=>array("User"),
            "Learning_Group"=>array("Major"),
            "Learning_Group_Subject"=>array("Learning_Group", "Subject"),
            "Major"=>array(),
            "Mark"=>array("User", "Post"),
            "Post"=>array("User", "Learning_Group", "Subject"),
            "Question"=>array("Post"),
            "Subject"=>array(),
            "Teacher_Subject"=>array("User", "Subject"),
            "User"=>array(),
            "User_Learning_Group"=>array("User", "Learning_Group"),
            "Year"=>array(),
        );
        $dir = "\\App\\Models\\".str_replace("_", "", $class);
        $datas = $dir::all();
        for($i=0;$i<count($fk[$class]);$i++) {
            $dir2 = "\\App\\Models\\".str_replace("_", "", $fk[$class][$i]);
            $fks[$fk[$class][$i]] = $dir2::all();
            $q = "DESCRIBE ".$fk[$class][$i]."s";
            $colname[$fk[$class][$i]] = DB::select($q);
        }
        if(!isset($fks)) {
            $fks = "";
            $colname = "";
        }
        $query = "DESCRIBE ".$class."s";
        $desc = DB::select($query);
        return view('admin_data', compact('datas', 'class', 'desc', 'fks', 'colname'));
    }
}
