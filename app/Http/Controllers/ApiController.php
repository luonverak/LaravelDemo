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
    public function updateStudent(Request $request, $data)
    {
        try {
            $data = Student::where('id', $data)->first();
            if ($data) {
                $file = $request->file('profile');
                $fileName = null;
                if ($file != null) {
                    $fileName = rand(1, 1000) . '-' . $file->getClientOriginalName();
                    $file->move('images', $fileName);
                }
                $student = Student::where('id', $data->id)->update(
                    [
                        'name' => $request->name ?? $data->name,
                        'gender' => $request->gender ?? $data->gender,
                        'profile' => $fileName == null ? $data->profile : url("images/$fileName"),
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
            } else {
                return response()->json([
                    'status' => 'No data',
                    'message' => 'Student not found'
                ]);
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
