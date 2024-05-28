<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller{
    
    public function index()
    {
        $products = Product::with('image')->paginate(6);
        if (!$products) {
            return response()->json([['data' => null, 'success' => false], 401]);
        }
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cats = Category::all();
        return view('products.create', compact('cats'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {

        $valid = Validator::make($req->all(), [
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'size' => 'required',
            'image' => 'required|image',
            'category_id' => 'required'
        ]);

        if ($valid->fails()) {
            return response()->json([
                ['data' => null, 
                'success' => false, 
                'message' => $valid->messages()
            ], 401]);
        }

        $product = new Product();

        $product->title = $req->title;
        $product->description = $req->description;
        $product->price = $req->price;
        $product->size = $req->size;
        $product->category_id = $req->category_id;
        $product->image_id = 1;
        $image = $req->file('image');
        $img =  uniqid() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('products'), $img);
        $path = url('/products/' . $img);
       
    
        $product->image = $path;
        
        $product->save();


        $products = Product::all();
        return view('products.index', compact('products'))->with('success', 'product created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $req){

        $product = Product::with('category')->find($req->query('id'));

        return view('products.show', compact('product'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Request $req){
        $product = Product::find($req->query('id'));
        
        $product->delete();

        $products = Product::all();
        return view('products.index', compact('products'));

    }
}
