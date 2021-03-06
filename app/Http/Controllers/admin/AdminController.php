<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Models\Stock;
use App\Models\Admin;
use App\Models\Customer;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $stocks = DB::table('stocks')
        ->select('id','name','category','price')
        ->get();
        return view('admin.list', compact('stocks'));
    }
    
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $stock = new Stock;

        $stock->name = $request->input('name');
        $stock->detail = $request->input('detail');
        $stock->recommended = $request->input('recommended');
        $stock->category = $request->input('category');
        $stock->price = $request->input('price');
        $stock->imgpath = $request->input('imgpath');
        
        $stock->save();

        return redirect('admin/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Stock $stock)
    {
    //    $stock =  Stock::find($id);
       return view('admin.show',['stock' =>$stock]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $stock = Stock::find($id);
        // ddd($stock);
        return view('admin.edit',compact('stock'));
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
        $stock = Stock::find($id);

        $stock->name = $request->input('name');
        $stock->detail = $request->input('detail');
        $stock->recommended = $request->input('recommended');
        $stock->category = $request->input('category');
        $stock->price = $request->input('price');
        $stock->imgpath = $request->input('imgpath');

        $stock->save();

        return redirect('admin/list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $stock = Stock::find($id);
        $stock->delete();

        return redirect('admin/index');
    }

    public function customer_list()
    {
        $customers = DB::table('customers')
        ->select('id','name','phonenumber','postalcode','region','addressline1','addressline2')
        ->get();
        // dd($customer_list);
        return view('admin.customer_list', compact('customers'));
    }

    
}
