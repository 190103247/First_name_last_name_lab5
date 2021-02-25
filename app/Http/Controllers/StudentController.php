<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function get_students(){
        static $students=array(0=>"Dauren", 1=>"Talgat", 2=>"Maksat");
        return $students;
    }

    public function show($id, $age)
    {
        $students=$this->get_students();
        $name = $students[$id];
        return view('student', compact('name', 'age'));
    }
}
