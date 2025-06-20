@extends('backend.master')
@section('content')
<body style="background-color:black"> <!-- Replace #abcdef with your desired color code -->
    <div class="page-title" style="display: flex; justify-content: center; align-items: center;">
        <div class="">
            <h3 style="color: black; font-weight: bold;">Point of Sale </h3>
        </div>
    </div>
    
        
        

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="">

                    <div class="">

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

                        <form action="{{route('addcart')}}" method="post" class="form-horizontal form-label-left" style="background-color:white"
                            novalidate>


                            <span class="section">POS</span>
                            @csrf

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name" style="color: black;  font-weight: bold;">Product name </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select type="text" id="ProductName" name="name" required="required"
                                        class="form-control col-md-7 col-xs-12">
                                        @foreach ($products as $product)


                                        <option value="{{$product->id}}">{{$product->product->name}}</option>

                                        @endforeach

                                    </select>
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12"style="color: black;  font-weight: bold;" for="email">Quantity
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="quantity" class="form-control col-md-7 col-xs-12"
                                        data-validate-length-range="6" data-validate-words="2" name="quantity"
                                        placeholder="Enter quantity" type="text">
                                </div>
                            </div>
                            {{-- <div class="ln_solid"></div> --}}
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <button type="submit" class="btn btn-primary">save</button>

                                </div>
                            </div>
                            <br>
                            <br>

                        </form>
                       
                        @php
                        $cart = session()->get('cart');
                        $total=0;
                        @endphp
                       

                        <form action="" method="post" class="form-horizontal form-label-left" novalidate style="background-color:white">
                            @csrf
                            <table class="table" style="background-color:white">

                                <thead style="color: black;  font-weight: bold;">
                                    <tr>

                                        <th>SL</th>
                                        <th scope="col">Item</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Sub total</th>
                                        <th><i class="fa fa-trash"></th>


                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($cart)

                                    @foreach ($cart as $carts)

                                    @php
                                    $subtotal=$carts['price']*$carts['qty'];
                                    $total=$subtotal+ $total
                                    @endphp
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{$carts['name']}}</td>
                                        <td>{{$carts['qty']}}</td>
                                        <td>{{$carts['price']}}</td>
                                        <td>{{ $subtotal }}</td>
                                        <td><a href="{{route('forget')}}"><i class="fa fa-trash"></i></a></td>



                                    </tr>
                                    @endforeach
                                    @endif

                                </tbody>

                            </table>
                            <tr >
                                <th style="color: black;  font-weight: bold;">Total: {{ $total }} TK</th>
                            </tr>

                           <br>
                           <br>
                           <br>
                           <br>
                        </form>
                    
                        <form action="{{route('cartpost')}}" method="post" class="form-horizontal form-label-left" style="background-color:white"
                            novalidate>

                            @csrf

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" style="color:black ;font-weight:bold;" for="name" >Date

                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input required type="date" value="{{ date('Y-m-d') }}" min="{{ date('Y-m-d') }}"
                                        class="form-control" id="sale_date" name="sale_date">
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12"style="color: black;  font-weight: bold;"  for="email">Customer
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select type="text" id="CustomerName" name="name" required="required"
                                        class="form-control col-md-7 col-xs-12">

                                        @foreach ($customers as $customer)


                                        <option value="{{$customer->id}}">{{$customer->name}}</option>

                                        @endforeach

                                    </select>
                                </div>

                            </div>

                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <button type="submit" class="btn btn-success">submit</button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
@endsection
