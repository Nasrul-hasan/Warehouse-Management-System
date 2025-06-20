@extends('backend.master')
@section('content')
<div class="" role="">
    <div class="">
        <div class="page-title" style="text-align: center; color:white;">
            <h3 style="text-transform: uppercase; font-weight: bold;">Manage Users</h3>
        </div>
        

        <div class="clearfix"></div>
        <br>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                    <div class="x_content">

                        <table class="table">
                            <span class="section" style="color: black;font-weight:bold">All User Information</span>
                            <thead style="color: black">
                                <tr>
                                    <th>SL</th>
                                    
                                    <th scope="col">User Name</th>
                                    <th scope="col">Full Name</th>
                                    <th scope="col">Designation</th>
                                     <th scope="col">Phone</th>
                                     <th scope="col">Action</th>
                                      
                                    

                                </tr>
                            </thead>
                            
                            <tbody style="color: black">
                                @foreach ($users as $user)
                                <tr>
                                    <td>{{$loop->iteration }}</td>
                                    <td>{{$user->username}}</td>
                                    <td>{{$user->fullname}}</td>
                                    <td>{{$user->type}}</td>
                                    <td>{{$user->phone}}</td>
                                    <td class="">
                                    <a href="{{route('user.edit',$user->id)}}"><i
                                                class="fa fa-pencil-square-o" style="font-size:24px; color:green">Edit</i></a>
                                    <a onclick="return confirm('Are you sure want to delete this user?');" href="{{route('user.delete',$user->id)}}"><i class="fa fa-close"
                                                style="font-size:24px;color:red">Delete</i></a>
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
