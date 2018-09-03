S@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @include('sidebar')
        <div class="col-md-9" class="col-sm-9" class="col-lg-9">
            <div class="panel panel-default">
                <div class="panel-heading" >Update User</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    

                    <form class="form-horizontal" method="post"  
                    action="{{url('user',$viewUser['id'])}}">
                    <input type="hidden" name="_method" value="put">
                    {{csrf_field()}}
                        <div class="form-group">
                            <label class="control-label col-sm-2" class="control-label col-md-2" class="control-label col-lg-2"  for="name">Name:</label>
                            <div class="col-sm-5" class="col-md-5" class="col-lg-5">
                                <input type="text" class="form-control" id="name" placeholder="Name" name="name" value='{{$viewUser['User_Name']}}' >
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" class="control-label col-md-2" class="control-label col-lg-2"  for="daesignation">Designation</label>
                            <div class="col-sm-5" class="col-md-5" class="col-lg-5">
                                <input type="text" class="form-control" id="daesignation" placeholder="Designation" name="designation" 
                                value='{{$viewUser['User_Designation']}}' >
                            </div>
                        </div>

                      {{--   <div class="form-group">
                            <label class="control-label col-sm-2" class="control-label col-md-2" class="control-label col-lg-2"  for="Select Type">Select Type</label>
                            <div class="col-sm-5" class="col-md-5" class="col-lg-5">
                                 <select class="form-control" id="selectType">
                                    <option selected>Select Type</option>
                                    <option value="1">New</option>
                                    <option value="2">Initial</option>
                                    <option value="3">Processing</option>
                                    <option value="3">complete</option>


                                 </select>
                            </div>
                        </div> --}}

                        <div class="form-group">
                            <label class="control-label col-sm-2" class="control-label col-md-2" class="control-label col-lg-2"  for="email">Email</label>
                            <div class="col-sm-5" class="col-md-5" class="col-lg-5">
                                <input type="email" class="form-control" id="email" placeholder="email" name="email" value='{{$viewUser['Email']}}' >
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" class="control-label col-md-2" class="control-label col-lg-2"  for="password">Password</label>
                            <div class="col-sm-5" class="col-md-5" class="col-lg-5">
                                <input type="text" class="form-control" id="password" placeholder="Password" name="password" 
                                value='{{$viewUser['Password']}}' >
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-5" class="col-sm-8 col-sm-offset-5" class="col-lg-8 col-lg-offset-5">
                                <button type="submit" class="btn btn-primary">
                                    Update
                                </button>
                            </div>
                        </div>
                    </form>
                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
