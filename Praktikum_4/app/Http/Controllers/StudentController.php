<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;
class StudentController extends Controller
{
    public function index(){
        $students = Student::all();
        $data = [
            'message' => "menampilkan data",
            'data' =>$students
        ];
        return response()->json($data,200);
    }
}
