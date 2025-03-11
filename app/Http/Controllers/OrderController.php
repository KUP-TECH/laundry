<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index() {
        

        return view("pages.order.view", ['active_link' => 'Dashboard']);
    }
}
