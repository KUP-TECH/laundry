<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderModel;
use Carbon\Carbon;
class DashboardController extends Controller
{
    //

    public function index() {

        $table              = [];
        $table['date']      = [];
        $table['count']     = [];
        $table['ammount']   = [];
        $table['pending']   = OrderModel::where('status', 'pending')->count();
        $table['completed'] = OrderModel::where('status', 'completed')->count();
        $table['today']     = Carbon::now();

        for ($i = 0; $i < 7; $i++) {
            $date       = Carbon::now()->subDays($i);
            $count      = OrderModel::whereDate('order_date', $date)->count();
            $ammount    = OrderModel::whereDate('order_date', $date)->sum('payable');
            array_push($table['date'], $date->format('Y-m-d'));
            array_push($table['count'], $count);
            array_push($table['ammount'], $ammount);
        }

        return view("pages.dashboard", ['active_link' => 'Dashboard', 'table' => $table]);
    }
}
