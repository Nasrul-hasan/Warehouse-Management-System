@extends('backend.master')
@section('content')

@php
   $total=0;
@endphp

<div class="" role="" >
    <div class="">
        <div class="page-title">
       


        </div>

        <div class="clearfix"></div>
        <br>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                
                    <div class="x_content">






                <!-- Button trigger modal -->
                <button class="btn btn-primary" onclick="printDiv('printableArea')">
                    <i class="fa fa-printer"></i>Print
                   
                </button>
                <a href="{{route('addpay.customer',['id' => $id])}}" class="btn btn-primary">Payment</a>


                <br>
                <br>

            </div>
            
            <div id="printableArea">

                <div class="">
                    <div class="">
                        <!-- <h3 class="">Sale Details</h3> -->
                    </div>
                    
                    <!-- /.box-header -->
                    <div class="box-body" style="color: black;  font-weight: bold;">
                        <table id="manageTable" class="table table-bordered table-striped">
                        <span class="section">Sale Details</span>
                            <thead>
                                <tr style="color: black;  font-weight: bold;">

                                    <th style="color: black;  font-weight: bold;">No.</th>
                                    <th scope="col" style="color: black;  font-weight: bold;">Item</th>
                                    <th scope="col" style="color: black;  font-weight: bold;">Quantity</th>
                                    <th scope="col" style="color: black;  font-weight: bold;">Price</th>
                                    <th scope="col" style="color: black;  font-weight: bold;">Sub total</th>
                                </tr>
                            </thead>
                            <tbody>




                                @foreach($salelist as $list)

                                @php
                                $total=$list->sub_total+ $total
                                @endphp

                                <tr style="color: black">

                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{$list->product->name}}</td>
                                    <td>{{$list->qty}}</td>
                                    <td>{{$list->sale_price}}</td>
                                    <td>{{$list->sub_total}}</td>






                                </tr>
                                @endforeach()

                            </tbody>



                        </table>
                        <tr>
                            <th>Total: {{$total}} TK</th>
                        </tr>

                    </div>

                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- col-md-12 -->
    </div>
    <!-- /.row -->


</section>





<script type="text/javascript">
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }

</script>


@endsection




