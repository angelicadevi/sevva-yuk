<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Product;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $orders = Order::paginate(4);
        return view('v4.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($slug)
    {
        $order = Product::where('idProduct', $slug)->first();
        return view('v4.create', compact('order'));  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $liatproduk = Product::where('idProduct',request('product'))->first();
        $totprice = $request->input('jumlah') * $liatproduk->price;
        $order = $this->validate(request(), [
            'idProduct' => 'required|numeric',
            'jumlah' => 'required|numeric',
            'rentdate' => 'required',
            'returndate' => 'required'
        ]);

        $order = $request->input('idProduct');
        Order::create($order);
        //return back()->with('success', 'Product has been added');
        return redirect('v4')->with('success','Order has been added');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::find($id);
        return view('v4.show',compact('order','id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Order::find($id);
        return view('v4.edit',compact('order','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Order::find($id);
        $order->delete();
        return redirect('v4')->with('success','Order has been deleted');
    }
    public function cari(Request $request)
    {
        $cari = $request->keyword;
        //$products = Product::all()->toArray();
        //$products = Product::paginate(4);
        $orders = Order:: where('idOrder','like',"%" .$cari. "%")
        ->paginate(4);
        return view('v4.index', compact('orders'));
    }

    public function review($review)
    {
        $order = Order::where('idOrder',$review)->get();
        return view('v4.review',compact('order'));
    }
}

