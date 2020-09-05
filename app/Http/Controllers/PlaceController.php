<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Place;

class PlaceController extends Controller
{
    //
    public function index(){

    }

    public function createPlace(Request $request){
        
        $place = new Place;
        $place->name = "Sede # 1";
        $place->save();

        return response()->json([
            'created' => true,
        ],201);
    }
}
