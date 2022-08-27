<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index(){
        $pizza=[
            ["type" => "special","crust" => "this", "price" => "45"],
            ["type" => "Goosh and gharch","crust" => "thick", "price" => "55"],
            ["type" => "peperoni","crust" => "this", "price" => "65"],
            ["type" => "simple","crust" => "this", "price" => "75"]
        ];
    
        // http://localhost:8000/train?name=mohammad&age=43
        // $name = request("name");
        $age = request("age");
        return view('train',["pizza" => $pizza ,"name" => request("name") ,"age" => $age]);

    }


    public function show(){

        $id = request('id'); 
        return view('route_id',["id" => $id ]);
    }
}


