@extends('backend.master')
@section('content')
<div class="" role="">
    <div class="">
        <div class="page-title" style="color:white;text-align:center; font-weight:bold">
            
            <h3 style="text-transform: uppercase; font-weight: bold;">
                Manage Stocks
            </h3>



        </div>

        <div class="clearfix"></div>
        <br>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                    <div class="x_content">

                        <table class="table">
                            <span class="section" style="color: black; font-weight:bold">All Stocks Information</span>
                            <thead style="color:black">
                                <tr>
                                    <th>SL</th>
                                    <th scope="col">Item</th>
                                    <th scope="col">Available Stock</th>
                                    <th scope="col">Buying Price</th>
                                    
                                    <th scope='col'>Action</th>

                                    <!-- <th>Action</th> -->


                                </tr>
                            </thead>

                            <tbody style="color: black">  
                            @foreach ($stocks as $stock)
                                <tr>
                                  
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $stock->product->name}}</td>
                                    <td>{{ $stock->quantity}}</td>
                                    <td>{{$stock->product->price}}</td>
                                    <td>
                                        <a href="{{route('stock.edit',$stock->id)}}"><i class="fa fa-pencil-square-o" style="font-size:24px;color:green;font-weight:bold">Edit</i></a>
                                    </td>

                                    

                                    
                                    
                                   
                                </tr>
                                @endforeach

                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection
