<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public $animals =["ayam","bebek"];
    public function index(){
        foreach($this->animals as $animal){
            echo $animal."<br>";
        }
    }
    public function store(Request $request){
        array_push($this->animals,$request->nama);}
    public function update(Request $request){
        echo "mengedit data";
    }
    public function destroy(Request $request){
        echo "menghapus data";
    }
}
