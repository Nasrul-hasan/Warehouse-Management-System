@extends('backend.master')
@section('content')
<div class="" role="">
    <div class="">
        <div class="page-title">
            <h3 style="color:white;text-align:center;text-transform:capitalize;font-weight:800;">Manage Suppliers</h3>



        </div>

        <div class="clearfix"></div>
        <br>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                    <div class="x_content">

                        <table class="table">
                            <span class="section" style="color: black; font-weight:bold;">All Suppliers List</span>
                            <div>

                                @if(session()->has('message'))
                                <div class="row" style="padding: 20px;">
                                    <span class="alert alert-success">{{session()->get('message')}}</span>
                                </div>
                                @endif

                            </div>
                            <thead style="color: black; font-weight:bold">
                                <tr>
                                <th>SL</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Supply Item</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Phone number</th>
                                     <th>Action</th>
                                    

                                </tr>
                            </thead>
                            <tbody style="color: black">
                            @foreach ($suppliers as $supplier)
                                <tr>
                                <td>{{ $loop->iteration }}</td>
                                    <td>{{$supplier->name}}</td>
                                    <td>{{$supplier->item}}</td>
                                    <td>{{$supplier->email}}</td>
                                    <td>{{$supplier->address}}</td>
                                    <td>{{$supplier->telephone}}</td>
                                    <td class="">
                                        <a href="{{route('supplier.edit',$supplier->id)}}"><i
                                                class="fa fa-pencil-square-o" style="font-size:24px;color:green;font-weight:inherit">Edit</i></a>

                                        <a onclick="return confirm('Are you sure want to delete this manager?');" href="{{route('supplier.delete',$supplier->id)}}"><i class="fa fa-close"
                                                style="font-size:24px;color:red;font-weight:bolder">Delete</i></a>
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
