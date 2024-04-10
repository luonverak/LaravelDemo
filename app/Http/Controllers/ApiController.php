<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getStudent()
    {
        $student = Student::all();
        if ($student->count() > 0) {
            return response()->json(
                [
                    'status' => 'success',
                    'student' => $student
                ]
            );
        } else {
            return response()->json(
                [
                    'status' => 'No data'
                ]
            );
        }
    }
    public function addStudent(Request $request)
    {
        try {
            $file = $request->file('profile');
            $fileName = rand(1, 1000) . '-' . $file->getClientOriginalName();
            $file->move('images', $fileName);
            $student = Student::create(
                [
                    'name' => $request->name,
                    'gender' => $request->gender,
                    'profile' => url("images/$fileName"),
                ]
            );
            if ($student) {
                return response()->json([
                    'stutus' => 'Success'
                ]);
            } else {
                return response()->json([
                    'stutus' => 'Error'
                ]);
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
