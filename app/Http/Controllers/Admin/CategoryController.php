<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index(){
        $cats = Category::paginate(6);
        if (!$cats) {
            return response()->json([['data' => null, 'success' => false], 401]);
        }
        return view('categories.index', compact('cats'));
    }

    
    public function store(Request $req){
        $slug = Str::slug($req->title);

        $rep_slug = Category::where('slug', '=', $slug)->first();
        if($rep_slug){
            return back()->with('fail', 'This Category is exist already !!');
        }
        
        $cat = new Category();
        $cat->title = $req->title;
        $cat->slug = $slug;
        $cat->save();

        return view('categories.index');
    }
}
