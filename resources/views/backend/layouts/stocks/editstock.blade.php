@extends('backend.master')
@section('content')
<div class="" role="">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Products</h3>
            </div>


        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                    <div class="x_content">

                        <form action="{{route('stock.update',$stock->id)}}" method="post" class="form-horizontal form-label-left"
                            novalidate>


                            <span class="section">Update Stock</span>



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

                            @method('put')
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ProductName">Quantity
                                    

                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input value="{{$stock->quantity}}" id="Quantiry" class="form-control col-md-7 col-xs-12" name="quantity"
                                        placeholder="Add quantity" required="required" type="number">
                                </div>
                            </div>

                           


                          



                           

                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <button type="submit" class="btn btn-primary">Cancel</button>
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
