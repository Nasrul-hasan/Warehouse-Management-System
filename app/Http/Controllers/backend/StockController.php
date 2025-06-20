<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Purchase;
use App\Models\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function store(){
        $stocks=Stock::all();
        $products=Product::all();
        $purchases=Purchase::all();
        
        
        return view('backend.layouts.stocks.managestock',compact('stocks','products','purchases'));
    }
   //added
    public function stockedit($id)

    {

        $stock=Stock::find($id);
         //dd($customers->all());

        return view('backend.layouts.stocks.editstock',compact('stock'));

    }

    public function stockupdate (Request $request, $id)
    {
        // dd($request->all());

        $stocks=Stock::find($id);


        $stocks->update([
            'quantity'=>$request->quantity,
           
        ]);

        return redirect()->route('stock.manage')->with('message','Product Information is Updated');

    }
}

