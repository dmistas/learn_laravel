<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $orders = $this->orders;
//        $fileName = storage_path('app/orders.txt');
//        if(file_exists($fileName)) {
//            $file = file_get_contents($fileName);
//            $ordersFile = json_decode($file, true);
//        }
//        if(isset($ordersFile) && !empty($ordersFile)) {
//            $orders = $ordersFile;
//        }
        $orders = Orders::orderBy('id', 'desc')->paginate(3);

        return  view('orders.index', ['orders' => $orders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('orders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $data = $request->only('fio', 'phone', 'email', 'description');
//        $saveFile = function (array $data){
//          $responseData = [];
//          $fileOrders = storage_path('app/orders.txt');
//          if(file_exists($fileOrders)){
//               $file = file_get_contents($fileOrders);
//               $response = json_decode($file, true);
//          }
//          $responseData[]=$data;
//          if(isset($response) && !empty($response)) {
//              $r = array_merge($response, $responseData);
//          } else {
//              $r = $responseData;
//          }
//          file_put_contents($fileOrders, json_encode($r));
//        };
//
//        $saveFile($data);



        return redirect()->route('orders.index')->with('success', 'Ваш заказ добавлен');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function show(Orders $orders)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function edit(Orders $orders)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Orders $orders)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function destroy(Orders $orders)
    {
        //
    }
}
