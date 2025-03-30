<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableController extends Controller
{
    public function index(){

        return view("pages.order.table", ['active_link' => 'Dashboard']);
    }
}
