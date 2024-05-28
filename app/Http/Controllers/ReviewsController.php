<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{

    public function index(){
        $revs = Review::with('user')->get();


        return  response()->json($revs);
    }
    public function store(Request $req){
        $revs = Review::with('user')->get();


        return  response()->json($revs);
    }
    
}
