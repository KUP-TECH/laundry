<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderModel;
use Carbon\Carbon;
class OrderController extends Controller
{
    public function index(Request $request) {
        
        $table_headers  = [
            'Order ID',
            'Name',
            'Weight',
            'Payable',
            'Order Date',
            'Paid',
            'Status',
        ];
        $search = $request->get('search');


        $orders = OrderModel::select('order_id', 'name', 'weight', 'payable', 'paid', 'order_date', 'status')
                ->orderBy('order_date', 'desc')
                ->orderBy('status', 'asc');

        if(isset($search) && $search != '') {
            $orders->where('order_id' , $search);
        }

        $orders = $orders->get();

        $status = [
            'pending', 'processing', 'completed'
        ];

        return view("pages.order.view", 
        [
                    'active_link'   => 'Dashboard', 
                    'table_headers' => $table_headers,
                    'orders'        => $orders,
                    'status'        => $status
                ]);
    }


    public function add_order(Request $request) {

        $data = $request->all();

        $order = new OrderModel();
        $order->name = $data['name'];
        $order->contactno = $data['contactno'];
        $order->weight = $data['weight'];
        $order->payable = $data['payable'];
        $order->status = 'pending';
        
        $order->save();
        return redirect()->route('orders')->with('success', 'Order added successfully');
    }


    public function set_status(Request $request) {
        $data   = $request->all();
        $order  = OrderModel::find($data['order_id']);
        $paid   = (float)$data['payable'];
        $status = (int)$data['paid'];
        $order->payable     = $paid;


        $order->paid        = $paid <= 0 ? 1 : $status;

        if($status == 1) {
            $order->payable = 0;
        }

        $order->status      = $data['job'];
        $order->pickup_date = Carbon::now();

        $order->save(); 

        return redirect()->route('orders')->with('success', 'Order status updated successfully');
    }
}
