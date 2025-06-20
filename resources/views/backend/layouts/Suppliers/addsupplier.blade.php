@extends('backend.master')
@section('content')
<div class="" role="">
    <div class="">
        <div class="page-title">
            <div class="" style="color: white">
                <h3 style="text-align: center; font-weight:800">Suppliers</h3>
            </div>
        </div>
        <br>
        <br>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-6">
                <!-- Add Supplier Form -->
                <div class="x_panel">
                    <div class="x_content">
                        <form action="{{ route('supplier.post') }}" method="post"
                            class="form-horizontal form-label-left" novalidate>
                            <span class="section">Add supplier</span>
                            @csrf

                            <div>
                                @if($errors->any())
                                    @foreach($errors->all() as $error)
                                        <div>
                                            <p class="alert alert-danger">{{ $error }}</p>
                                        </div>
                                    @endforeach
                                @endif

                                @if(session()->has('message'))
                                    <div class="row" style="padding: 20px;">
                                        <span class="alert alert-success">{{ session()->get('message') }}</span>
                                    </div>
                                @endif
                            </div>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" style="color:black;font-weight:bold" for="name">Supplier Name

                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="name" class="form-control col-md-7 col-xs-12"
                                        data-validate-length-range="6" data-validate-words="2" name="name"
                                        placeholder="Enter supplier name" type="text">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" style="color:black;font-weight:bold"  for="item">Supply item

                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="item" class="form-control col-md-7 col-xs-12"
                                        data-validate-length-range="6" data-validate-words="2" name="item"
                                        placeholder="Enter supply item" type="text">
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" style="color:black;font-weight:bold"  for="email">Email
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="email" class="form-control col-md-7 col-xs-12"
                                        data-validate-length-range="6" data-validate-words="2" name="email"
                                        placeholder="Enter email" type="email">
                                </div>
                            </div>









                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" style="color:black;font-weight:bold" >Address
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="address" name="address" data-validate-linked="address"
                                        placeholder="Enter address" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>


                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" style="color:black;font-weight:bold"  for="telephone">Phone
                                    Number
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="tel" id="telephone" name="telephone" placeholder="Enter phone number"
                                        data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>





                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <button type="submit" class="btn btn-danger">Cancel</button>
                                    <button id="send" type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <!-- All Suppliers List -->
                <div class="x_panel">
                    <div class="x_content">
                        <table class="table">
                            <span class="section">All Suppliers</span>
                            <div>
                                @if(session()->has('message'))
                                    <div class="row" style="padding: 25px;">
                                        <span class="alert alert-success">{{ session()->get('message') }}</span>
                                    </div>
                                @endif
                            </div>
                            <thead style="color:black;font-weight:bold" >
                                <tr>
                                    <th>SL</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Supply Item</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Phone number</th>
                                </tr>
                            </thead>
                            <tbody style="color:black;">
                                @foreach ($suppliers as $supplier)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $supplier->name }}</td>
                                        <td>{{ $supplier->item }}</td>
                                        <td>{{ $supplier->email }}</td>
                                        <td>{{ $supplier->address }}</td>
                                        <td>{{ $supplier->telephone }}</td>
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