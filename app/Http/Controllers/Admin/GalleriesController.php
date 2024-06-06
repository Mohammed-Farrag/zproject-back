<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleriesController extends Controller
{
    public function index()
    {
        $galleries = Gallery::paginate(6);
        if (!$galleries) {
            return response()->json([['data' => null, 'success' => false], 401]);
        }
        $galleries = Gallery::all();
        return view('galleries.index', compact('galleries'));
    }



    public function show(Request $req)
    {

        $gallery = Gallery::with('images')->find($req->query('id'));

        return view('galleries.show', compact('gallery'));
    }



    public function edit(Request $req)
    {
        $gallery = Gallery::find($req->id);

        return view('galleries.update', compact('gallery'));
    }


    public function update(Request $req, $id)
    {
        $gallery = Gallery::findOrFail($id);



        // Update the title
        $gallery->title = $req->input('title');

        // Handle the main image upload
        if ($req->hasFile('thumbnail')) {

            $thm = $req->file('thumbnail');
            $thm->move(public_path('galleries'), $thm->getClientOriginalName());
            $path = url('/galleries/' .  $thm->getClientOriginalName());
            $gallery->thumbnail = $path;
        }



        // Save the item
        $gallery->save();

        $galleries = Gallery::with('images')->get();
        return view('galleries.index', compact('galleries'));
    }


    public function add(Request $req, $id)
    {
        // dd($req->file('images'));
        $gallery = Gallery::find($id);

        if ($req->hasFile('images')) {
            foreach ($req->file('images') as $img) {

                $img->move(public_path('galleries'), $img->getClientOriginalName());
                $path = url('/galleries/' .  $img->getClientOriginalName());

                $image = new Image();
                $image->path = $path;
                $image->gallery_id = $gallery->id;


                $image->save();
            }
        }

        $galleries = Gallery::with('images')->get();
        return view('galleries.index', compact('galleries'));
    }


    public function deleteImage($id){
       Image::destroy($id);
        return back();
    }





    public function store(Request $req)
    {



        $gallery = new Gallery();
        $gallery->title = $req->title;

        if ($req->hasFile('thumbnail')) {

            $thm = $req->file('thumbnail');
            $thm->move(public_path('galleries'), $thm->getClientOriginalName());
            $path = url('/galleries/' .  $thm->getClientOriginalName());
            $gallery->thumbnail = $path;
        }

        $gallery->save();


        if ($req->hasFile('images')) {
            foreach ($req->file('images') as $img) {

                $img->move(public_path('galleries'), $img->getClientOriginalName());
                $path = url('/galleries/' .  $img->getClientOriginalName());



                $image = new Image();
                $image->path = $path;
                $image->gallery_id = $gallery->id;


                $image->save();
            }
        }


        $galleries = Gallery::with('images')->get();
        return view('galleries.index', compact('galleries'));
    }




    public function delete(Request $req)
    {
        $gallery = Gallery::find($req->query('id'));

        $gallery->delete();

        $galleries = Gallery::with('images')->get();
        return view('galleries.index', compact('galleries'));
    }
}
