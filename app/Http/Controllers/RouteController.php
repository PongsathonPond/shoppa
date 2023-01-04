<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class RouteController extends Controller
{
    public function index()
    {

        $role = Auth::user()->role;
        if ($role == '1') {
            return view('page.admin.route.index');

        } else {

            return view('page.users.route.index');
        }
    }
}