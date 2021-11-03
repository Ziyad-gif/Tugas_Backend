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
    public function store(Request $request){
        $student =Student::create([
            'nama'=>$request->nama,
            'nim' =>$request->nim,
            'email' =>$request->email,
            'jurusan'=>$request->jurusan,
        ]);
        $data=[
            'message' =>"student dibuat",
            'data' =>$student
        ];
        return response()->json($data,201);


    }
    function show($id){
        $student = Student::find($id);
        if($student){
        $data=[
            'message' =>"id dapat",
            'data' =>$student
        ];
        return response()->json($data,200);
    }else{
        $data = [
            "message"=>"data not found"
        ];
        return response()->json($data,404);
    }
}
function update(Request $request ,$id){
    $student = Student::find($id);

    $student->update([
        'nama' =>$request->nama ?? $student->nama,
        'nim'=>$request->nim ?? $student->nim,
        'email' =>$request->email ?? $student->email,
        'jurusan' =>$request->jurusan?? $student->jurusan
    ]);
    echo $student;

}
function destroy($id){
    $student = Student::find($id);

    if($student){
        $student->delete();
        $data =[
            'message' =>"student is delete"
        ];
        return response()->json($data,200);
    }else{
        $data =[
            'message' =>"data tidak ditemukan"
        ];


    }
}
}
