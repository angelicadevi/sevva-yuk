<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Store;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stores = Store::paginate(4);
        return view('v3.index', compact('stores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $store = Store:: all();
        return view('v3.create', compact('store')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = $this->validate(request(), [
        'nameStore' => 'required',
        'address' => 'required',
        'phonenumber' => 'required|numeric',
        'email' => 'required'
        ]);

        Store ::create($store);
        //return back()->with('success', 'Store has been added');
        return redirect('v3')->with('success','Store has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $store = Store::find($id);
        return view('v3.show',compact('store','id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $store = Store::find($id);
        return view('v3.edit',compact('store','id'));
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
        $store = Store::find($id);
        $store->delete();
        return redirect('v3')->with('success','Store has been deleted');
    }
    public function cari(Request $request)
    {
        $cari = $request->keyword;
        $stores = Store:: where('nameStore','like',"%" .$cari. "%")
        ->paginate(4);
        return view('v3.index', compact('stores'));
    }
}
