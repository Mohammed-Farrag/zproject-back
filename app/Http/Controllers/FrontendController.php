<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Gallery;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;

class FrontendController extends Controller
{
    public function gallery()
    {
        $galleries = Gallery::with('images')->get();
        return view('frontend.gallery', ['galleries' => $galleries]);
    }

    public function print_store()
    {
        $products = Product::with(['image', 'category'])->get();
        $categories = Category::all();
        return view('frontend.store', ['categories' => $categories, 'products' => $products]);
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return back();
    }

    public function login(Request $request)
    {
        $user = $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|string',
        ]);

        Auth::attempt($user);

        $request->session()->regenerate();

        return back();
    }

    public function logout()
    {
        Auth::guard('web')->logout();
        return back();
    }

    public function product($id) {
        $product = Product::find($id);
        $products = Product::where('id', '!=', $id)->get();

        return view ('frontend.product', ['product' => $product, 'products' => $products]);
    }
}
