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
        $news = NewModel::paginate(6);
        
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
        $new->title = $req->title;
        $new->days = $req->days;
        $new->hours = $req->hours;
        $new->minutes = $req->minutes;
        $new->seconds = $req->seconds;
        $new->image = Storage::putFileAs('news', $req->file('image') , time() . $req->file('image')->getClientOriginalName() );
        $new->category_id = $req->category_id;
        $new->slug = Str::slug($req->text);

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
