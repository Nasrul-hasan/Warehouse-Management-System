@extends('backend.master')
@section('content')
<div class="" role="">
    <div class="">
        <div class="page-title">
            <div class="">
                <h3 style="color: white; font-weight:700;text-align:center"> Add Customers</h3>
            </div>


        </div>
         <br>
         <br>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                    <div class="x_content">


                        <form action="{{route('customer.post')}}" method="post" class="form-horizontal form-label-left"
                            novalidate>


                            <span class="section" style="color: black"> Customers Information</span>
                            @csrf


                            <div>

                                @if($errors->any())
                                @foreach($errors->all() as $error)
                                <div>
                                    <p class="alert alert-danger">{{$error}}</p>
                                </div>
                                @endforeach

                                @endif

                                @if(session()->has('message'))
                                <div class="row" style="padding: 20px;">
                                    <span class="alert alert-success">{{session()->get('message')}}</span>
                                </div>
                                @endif

                            </div>



                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" style="color: black" for="name">Name

                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input require id="name" class="form-control col-md-7 col-xs-12"
                                        data-validate-length-range="6" data-validate-words="2" name="name"
                                        placeholder="Customer name"  type="text">
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" style="color: black" for="email">Email
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input require id="email" class="form-control col-md-7 col-xs-12"
                                        data-validate-length-range="6" data-validate-words="2" name="email"
                                        placeholder="Enter email" type="email">
                                </div>
                            </div>









                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" style="color: black">Address
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input require type="text" id="address" name="address" data-validate-linked="address"
                                        placeholder="Enter address"
                                        class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>


                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" style="color: black" for="telephone">Phone
                                    Number
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input require type="tel" id="telephone" name="telephone"
                                        placeholder="Enter phone number" data-validate-length-range="8,20"
                                        class="form-control col-md-7 col-xs-12">
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
        </div>
    </div>
</div>
@endsection
