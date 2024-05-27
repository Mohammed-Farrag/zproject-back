<?php

namespace App\Http\Controllers;

use App\Models\NewModel;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        $news = NewModel::with('category')->get();

        return response()->json(['data' => $news]);
    }



    public function show(Request $req){
        $new = NewModel::find($req->id);

        return response()->json(['data' => $new]);
    }

}
