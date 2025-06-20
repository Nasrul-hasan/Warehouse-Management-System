@extends('backend.master')
@section('content')
@php
$total=0;
@endphp
<div class="" role="">
    <div class="">
        <div class="page-title">
            <h3 style="color:whitesmoke; font-weight:bold">Report</h3>



        </div>
        <br>
        <br>
        <br>
        <form action="#" method="get">
            <div class="row book-form">

                <div class="container">

                    <div class="row">
                        <div class="col-md-4 col-md-offset-4">

                            <form method="POST" action="/select">
                                {{ csrf_field() }}
                                <div class="mb-3">
                                    <label style="color: white;font-weight:bold">From Date:</label>
                                    <input type="date" class="form-control" name="fdate">
                                </div>
                                <br>
                                <div class="mb-3">
                                    <label style="color: white;font-weight:bold">To Date:</label>
                                    <input type="date" class="form-control" name="sdate">
                                </div>
                                
                                <br>
                                <input type="submit" value="Submit" class="btn btn-success">
                            </form>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary" onclick="printDiv('printableArea')">
                    <i class="fa fa-print"></i> Print
                </button>






            </div>

    </div>

    </form>

    <div class="clearfix"></div>
    <br>
    <div id="printableArea">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                    <div class="x_content">

                        <table class="table">
                            <span class="section" style="color: black">Purchase report</span>
                            <thead style="color: black;font-weight:bold;">
                                <tr>
                                    <th>No.</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Challan No</th>
                                    <th scope="col">Supplier </th>
                                    <th scope="col">Total Price</th>



                                </tr>
                            </thead>
                            <tbody style="color: black">

                                @foreach($purchasehistories as $purchase)
                                @php
                                $total=$purchase->total_price+ $total
                                @endphp
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{$purchase->purchase_date}}</td>
                                    <td>{{$purchase->challan_no}}</td>
                                    <td>{{$purchase->supplier->name}}</td>
                                    <td>{{$purchase->total_price}}</td>



                                </tr>
                                @endforeach()
                            </tbody>



                        </table>
                        <td>
                            <h4 style="font:800">Total- {{$total}} Tk</h4>
                        </td>
                    </div>



                </div>
            </div>
        </div>
    </div>
</div>
</div>




@endsection
<script type="text/javascript">
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }

</script>
