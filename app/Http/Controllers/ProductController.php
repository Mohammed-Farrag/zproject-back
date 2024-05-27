<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with('category')->get();
        
        return response()->json(['data' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {

        $valid = validator()->make($req->all(), [
            'title' => 'require',
            'description' => 'required',
            'price' => 'required',
            'size' => 'required',
            'image' => 'required|image'
        ]);

        if ($valid->fails()) {
            return response()->json([['data' => null, 'success' => false, 'message' => 'something wrong in validations'], 401]);
        }

        $product = Product::create([
            'title' => $req->title,
            'description' => $req->description,
            'price' => $req->price,
            'size' => $req->size
        ]);

        if ($req->hasFiles('image')) {
            $file = $req->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/products', $filename);
            $product->image = $filename;
            $product->save();
        }

        return response()->json([
            [
                'data' => $product,
                'success' => true,
                'message' => 'product created successfully'
            ], 200
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $req)
    {
        $product = Product::with('category')->find($req->id);
        
        return response()->json(['data' => $product]);
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
    public function destroy(Request $req)
    {
        $product = Product::find($req)->get();
        if (!$product) {
            return response()->json([['data' => null, 'success' => false, 'message' => 'no product with this id'], 401]);
        }
        $product->delete();
        return response()->json([['data' => $product, 'success' => true, 'message' => 'product deleted successfully'], 200]);
    }
}
