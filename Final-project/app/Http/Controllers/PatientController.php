<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\patiens;
use Illuminate\Support\facades\Validator;
class PatientController extends Controller
{
    public function index(){
        $patiens = patiens::all();
        $total = $patiens;

        if($total){
            $data = [
                'message'=>'data didapatkan',
                'jumlah'=>$total,
                'data' =>$patiens
            ];
            return response()->json($data,200);

        }else{
            $data = [
                'message' =>'data tidak ada'
            ];
            return response()->json($data,200);
        }
    }

    public function store(Request $request){

        Validator::make($request->all(),[
            'nama' =>'required',
            'phone'=>'required',
            'address'=>'required',
            'status'=>'required',
            'in_date_at'=>'required',
            'out_date_at'=>'required'



        ])->validate();
        $patiens = patiens::create([
            'nama' =>$request->nama,
            'phone' =>$request->phone,
            'address'=>$request->address,
            'status' =>$request->status,
            'in_date_at'=>$request->in_date_at,
            'out_date_at'=>$request->out_date_at,
        ]);

        $data = [
            'message' =>'data telah ditambahkan',
            'data'=>$patiens
        ];
        return response()->json($data,200);









    }

    function show($patiens){

        $patiens = patiens::find($patiens);
        if($patiens){
            $data = [
                'message' =>"data ditemukan",
                'data' =>$patiens
            ];
            return response()->json($data,200);

        }else{
            $data = [

                'message'=>"data tidak ditemukan"
            ];
        }

}
public function update(Request $request,$patiens){

    $patiens = patiens::find($patiens);
    if($patiens){
        $patiens->update($request->all());
        $data = [
            'message' =>'data dirubah',
            'data' =>$patiens
        ];
        return response()->json($data,200);

    }
    else{
        $data = [
            'message' =>'data tidak ditemukan'
        ];
        return response()->json($data,200);
    }

}
public function destroy($patients){

    $patiens = patiens::find($patients);

    if($patiens)
    {
        $patiens->delete();
        $data = [
            'message' =>'data dihapus',
            'data' =>$patiens
        ];
        return response()->json($data,200);

    }else{
        $data = [
            'message' => "data tidak ditemukan"
        ];
        return response()->json($data,404);
    }

}
public function search($name){
    $patiens = patiens::where('nama','like','%'.$name.'%');

    $total = count($patiens);

    if($total){

    }
}
public function searchByStatus($status){
    $patiens = patiens::where('status',$status);

    $total = count($patiens);

    if($total){

    $data = [
        'message '=>"data ditemukan",
        'total'=>$total,
        'data'=>$patiens
    ];

    return response()->json($data,200);
}
else{

    $data = [
        'message ' =>'data tidak ditemukan'
    ];
    return response()->json($data,404);
}

}
public function positive(){
    return $this->searchByStatus('positive')->get();
}
public function recovered(){
    return $this->searchByStatus('recovered')->get();
}
public function dead(){
    return $this->searchByStatus('dead')->get();
}
}
