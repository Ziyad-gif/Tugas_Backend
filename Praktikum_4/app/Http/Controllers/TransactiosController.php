<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Transactio;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Validator;

use Symfony\Component\HttpFoundation\Response;
class TransactiosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transactio = Transactio::orderBy('time','DESC')->get();
        $response =[
            'message' =>'list disini dari time',
            'data' =>$transactio
        ];
        return response()->json($response,Response::HTTP_OK);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator =Validator::make($request->all(),[
            'title' =>('required'),
            'amount' =>['required','numeric'],
            'type' =>['required','in:expense,revenue']

        ]);

        if($validator->fails()){
            return response()->json($validator->errors(),
            Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        try{
            $transactio = Transactio::create($request->all());
            $response=[
                'message' =>"Transactio dibuat",
                'data' =>$transactio
            ];
        }catch(QueryException $e){
            return response()->json([
            'message' =>"failed ".$e->errorInfo
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $transactio = Transactio::findorFail($id);


        $validator =Validator::make($request->all(),[
            'title' =>('required'),
            'amount' =>['required','numeric'],
            'type' =>['required','in:expense,revenue']

        ]);

        if($validator->fails()){
            return response()->json($validator->errors(),
            Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        try{
            $transactio = Transactio::create($request->all());
            $response=[
                'message' =>"Transactio dibuat",
                'data' =>$transactio
            ];
        }catch(QueryException $e){
            return response()->json([
            'message' =>"failed ".$e->errorInfo
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
