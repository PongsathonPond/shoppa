<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RouteController extends Controller
{
    public function index()
    {
        $product = Product::all();
        $role = Auth::user()->role;
        if ($role == '1') {
            return view('page.admin.route.index');

        } else {

            return view('page.users.route.index', compact('product'));
        }
    }

    public function store(Request $request)
    {

        dd($request);
    }
}
