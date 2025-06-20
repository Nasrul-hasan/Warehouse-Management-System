<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Supplier;
use App\Models\Purchase;
use App\Models\Sale;


use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        $title='Dashboard';
        $user=User::all()->count();
        $product=Product::all()->count();
        $customer=Customer::all()->count();
        $supplier=Supplier::all()->count();
        $purchase=Purchase::all()->count();
        $sale=Sale::all()->count();
        $sale_value=Sale::sum('total_price');
        $purchase_value =Purchase::sum('total_price');

        return view('backend.layouts.admin.dashboard',compact ('title','user','product','customer','supplier','purchase','sale','sale_value','purchase_value'));
    }
}
