<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getStudent(){
        $student = Student::all();
        if($student->count() > 0){
            return response()->json($student);
        }else{
            return response()->json(
                [
                    'status' =>'No data'
                ]
            );
        }
    }
}
