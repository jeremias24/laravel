<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    //

    public function index(){

        //dd("Test");

        foreach(Student::all()->take(2) as $data){
            echo $data->firstname ."<br/>";
        }
    }
}
