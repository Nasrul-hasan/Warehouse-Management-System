@extends('backend.master')

@section('content')
<h1 style="color:white;font-weight:900;text-align:center">{{$title}}</h1>

<br>
<div class="col-md-12 col-sm-12 col-xs-12 tile_stats_count" style="background-color:darkslategrey; font-size:20px;">
    <span class="count_top text-dark" style="color:black; font-weight:bold;"><i class="fa fa-money"></i> Total Purchase value</span>
    <div class="count"></div>
    <span class="count_bottom"><i class="green"> </i> </span>
    <h3>{{$purchase_value}}</h3>
  </div>
  

  <div class="col-md-12 col-sm-12 col-xs-12 tile_stats_count" style="background-color:burlywood; font-size:20px;">
    <span class="count_top text-dark" style="color: black; font-weight:bold;"><i class="fa fa-dollar"></i> Total Sale value</span>
    <div class="count"></div>
    <span class="count_bottom"><i class="green"> </i> </span>
    <h3>{{$sale_value}}</h3>
  </div>
  

    <div class="col-md-12 col-sm-12 col-xs-12 tile_stats_count" style="background-color:chocolate; font-size:20px;">
        <span class="count_top" style="color: black; font-weight:bold;"><i class="fa fa-book"></i>Total Products</span>
        <div class="count"></div>
        <span class="count_bottom"><i class="green"> </i></span>
       <h3>{{$product}}</h3>

    </div>
    <div class="col-md-12 col-sm-12 col-xs-12 tile_stats_count" style="background-color:dimgray; font-size:20px;">
        <span class="count_top" style="color: black; font-weight:bold;"><i class="fa fa-user"></i> Total Suppliers</span>
        <div class="count"></div>
        <span class="count_bottom"><i class="red"> </i> </span>
        <h3>{{$supplier}}</h3>
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12 tile_stats_count" style="background-color:teal; font-size:20px;">
        <span class="count_top" style="color: black; font-weight:bold;"><i class="fa fa-user"></i> Total Customers</span>
        <div class="count green"></div>
        <span class="count_bottom"><i class="green"></i> </span>
        <h3>{{$customer}}</h3>
    </div>


    <div class="col-md-12 col-sm-12 col-xs-12 tile_stats_count" style="background-color:sienna; font-size:20px;">
        <span class="count_top" style="color: black; font-weight:bold;"><i class="fa fa-user"></i> Total Users</span>
        <div class="count"></div>
        <span class="count_bottom"><i class="green"></i> </span>
        <h3>{{$user}}</h3>
    </div>


    @endsection
    <style>
     .tile_stats_count {
  background-color: transparent;
  border: 1px solid black;
  padding: 17px;
}

.tile_stats_count .count_top {
  font-size: 20px;
  font-weight: bold;
  color: black;
}

.tile_stats_count .count {
  font-size: 30px;
  font-weight: bold;
  color: green;
}

.tile_stats_count .count_bottom {
  font-size: 15px;
  font-weight: bold;
  color: black;
}

.tile_stats_count h3 {
  font-size: 20px;
  font-weight: bold;
  color: black;
}





    </style>
