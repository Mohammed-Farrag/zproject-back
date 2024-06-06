<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Image;
use App\Models\NewModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class NewsController extends Controller
{



    public function index()
    {
        $news = NewModel::with('category')->get();
        
        return view('news.index', compact('news'));
    }


    public function create(){
        $cats = Category::all();
        return view('news.create', compact('cats'));
    }



    public function makeActive(Request $req){
        $new = NewModel::find($req->id);
        $new->active = true;
        response()->json(['success' => true, 'message' => 'set To active']);
    }



    public function store(Request $req){

        $new = new NewModel();
        $new->slug = $req->title;
        $new->soon = $req->soon;
        if ($req->hasFile('image')) {

            $img = $req->file('image');
            $img->move(public_path('news'), $img->getClientOriginalName());
            $path = url('/news/' .  $img->getClientOriginalName());
            $new->image = $path;
        }
        $new->category_id = $req->category_id;

        $new->save();


        $news = NewModel::all();
        return view('news.index', compact('news')); 
    }



    public function delete(Request $req){
        $new = NewModel::find($req->query('id'));
        
        $new->delete();

        $news = NewModel::all();
        return view('news.index', compact('news'));

    }


}
