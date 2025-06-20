@extends('backend.master')
@section('content')
<div class="" role="">
    <div class="">
        <div class="page-title">
            <div class="" style="text-align: center; color: White;">
                <h3 style="text-transform: uppercase; font-weight:700">Adding New Users</h3>
                
                
            </div>

    
        </div>
        <br>
        <br>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                    <div class="x_content">

                        <form action="{{route('postuser')}}" method="post" class="form-horizontal form-label-left" novalidate>


                            <span class="section">User Information</span>
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
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="UserName" style="color:black">User Name

                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="Username" class="form-control col-md-7 col-xs-12"
                                        data-validate-length-range="6" data-validate-words="2" name="name"
                                        placeholder="User name" type="text">
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="lastName" style="color: black">Full Name
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="lastName" class="form-control col-md-7 col-xs-12"
                                        data-validate-length-range="6" data-validate-words="2" name="fullname"
                                        placeholder="Full name" type="text">
                                </div>
                            </div>





                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="designation" style="color: black">Type

                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select id="designation" name="designation">
                                        <option value="manager">Manager</option>
                                        <option value="seller">Seller</option>
                                    </select>
                                </div>
                            </div>






                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone" style="color: black">Phone
                                    Number
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="tel" id="telephone" name="phone" required="required"
                                        data-validate-length-range="8,20" placeholder="Enter phone number"
                                        class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            <div class="item form-group">
                                <label for="password" class="control-label col-md-3" style="color: black">Password</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="password" type="password" name="password" data-validate-length="6,8"
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
