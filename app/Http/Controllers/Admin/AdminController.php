<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Gellery;
use App\Models\NewModel;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Throwable;

class AdminController extends Controller
{
    public function register(Request $req)
    {

        $req->validate([
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);


        $admin = new Admin();
        $admin->username = $req->username;
        $admin->email = $req->email;
        $admin->password = bcrypt($req->password);

        $res = $admin->save();
        if ($res) {
            return back()->with('success', 'Registered Successfully');
        } else {
            return back()->with('fail', 'Something Wrong');
        }
    }



    public function login(Request $req)
    {
        $req->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);


        $admin = Admin::where('email', '=', $req->email)->first();
        if ($admin) {
            if (Hash::check($req->password, $admin->password)) {
                $req->session()->put('adminId', $admin->id);
                return redirect('dashboard');
            } else {

                return back()->with('fail', 'This Password not matches');
            }
        } else {
            return back()->with('fail', 'This Email is not registered');
        }
    }



    public function dashboard(Request $req)
    {
        $data = [];
        if (Session::has('adminId')) {
            $data = Admin::where('id', '=', Session::get('adminId'))->first();
            Session::put('adminData', $data);
        }

        $products = Product::count();
        $news = DB::table('new_models')->count();
        $galleries =  DB::table('galleries')->count();
        return view('admin', compact( ['products' , 'news', 'galleries' ]));
    }

    public function logout()
    {
        if (Session::has('adminId')) {
            Session::pull('adminId');
            Session::pull('adminData');

            return redirect('/dashboard/login');
        }
    }
}
