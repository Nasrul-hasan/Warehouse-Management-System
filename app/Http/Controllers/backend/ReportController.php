<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Purchase;
use App\Models\Purchasedetails;
use App\Models\Sale;
use App\Models\Saledetails;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function purchase_report(Request $request){
       //dd($request->all());
       if($request){
        $purchasehistories=Purchase::whereBetween('purchase_date',[$request->fdate, $request->sdate])->orderBy('id','desc')->get();

    }

    else{
        $purchasehistories=Purchase::orderBy('id','desc')->get();
    }




      //dd($purchasehistories->all());




        return view('backend.layouts.reports.purchasereport',compact('purchasehistories'));

    }

    public function sales_report(Request $request){
        if($request){
            $sales=sale::whereBetween('sale_date',[$request->fdate, $request->sdate])->orderBy('id','desc')->get();

        }

        else{
            $sales=Sale::orderBy('id','desc')->get();

        }
        //dd($sales->all());

        return view('backend.layouts.reports.salesreport',compact('sales'));

    }

}
