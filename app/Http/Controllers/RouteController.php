<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    //
    public function index() {
    return "This is from Controller";
    }

    //class
    public function profile() {
    return "This is Profile from Controller";
}
}
