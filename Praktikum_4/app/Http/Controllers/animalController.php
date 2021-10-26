<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class animalController extends Controller
{
    public $animals =["ayam","bebek"];

    function index(Request $request){
        foreach($animals as $animal){
            echo $animal." ";
        }
    function store(Request $request){
        array_push($this->animals,$request->nama);
        this->index();
    }
    function update(Request $request,$id){
        echo "mengedit id :$id";
    }
    function destroy(Request $request,$id){

        echo "menghapus :$id";
    }

    }

}
