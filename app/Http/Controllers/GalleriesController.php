<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleriesController extends Controller
{
    public function index(){
        $galleries = Gallery::all();

        return response()->json(['data' => $galleries]);
    }
    public function show(Request $req){
        $gallery = Gallery::with('images')->find($req->id);

        return response()->json(['data' => $gallery]);
    }


}
