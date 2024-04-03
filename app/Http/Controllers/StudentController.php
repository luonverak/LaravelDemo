<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use StudentService;

class StudentController extends Controller
{


    public function getStudent()
    {
        $student = Student::all();
        return view('home_page', ['student' => $student]);
    }
    public function addPage()
    {
        return view('add_page');
    }
    public function addStudent(Request $request)
    {
        try {
            if ($request->get('btnSave') == 'Save Student') {
                $file = $request->file('profile');
                $fileName = rand(1, 1000) . '-' . $file->getClientOriginalName();
                $file->move('images', $fileName);
                $student = Student::create(
                    [
                        'name' => $request->get('txt_name'),
                        'gender' => $request->get('gender'),
                        'profile' => $fileName,
                    ]
                );
                if ($student) {
                    return redirect('/');
                }
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
