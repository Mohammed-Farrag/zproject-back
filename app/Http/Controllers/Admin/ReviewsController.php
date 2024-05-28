<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    
    public function index(){
        $revs = Review::with('user')->get();


        return view('reviews.index', compact('revs'));
    } 


    public function delete(Request $req) {
        $rev = Review::find($req->id);
        $rev->delete();

        $revs = Review::with('user')->get();


        return view('reviews.index', compact('revs'));
    }
}
