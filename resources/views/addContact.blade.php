@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @include('sidebar')
        <div class="col-md-9" class="col-sm-9" class="col-lg-9">
            <div class="panel panel-default">
                <div class="panel-heading" >Add Contact</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    

                    <form class="form-horizontal">

                        <div class="form-group">
                            <label class="control-label col-sm-2" class="control-label col-md-2" class="control-label col-lg-2" for="Select Type">Select Label</label>
                            <div class="col-sm-5">
                                 <select class="form-control" id="label">
                                    <option selected>Select Label</option>
                                    <option value="1">New</option>
                                    <option value="2">Initial</option>
                                    <option value="3">Processing</option>
                                    <option value="3">complete</option>


                                 </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" class="control-label col-md-2" class="control-label col-lg-2" for="name">Name:</label>
                            <div class="col-sm-5" class="col-md-5" class="col-lg-5">
                                <input type="text" class="form-control" id="name" placeholder="Name">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" class="control-label col-md-2" class="control-label col-lg-2" for="BusinessName">Business Name</label>
                            <div class="col-sm-5" class="col-md-5" class="col-lg-5">
                                <input type="text" class="form-control" id="BusinessName" placeholder="Business Name">
                            </div>
                        </div>

                        

                        <div class="form-group">
                            <label class="control-label col-sm-2" class="control-label col-md-2" class="control-label col-lg-2" for="email">Email</label>
                            <div class="col-sm-5" class="col-md-5" class="col-lg-5">
                                <input type="email" class="form-control" id="email" placeholder="email">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2"  class="control-label col-md-2" class="control-label col-lg-2"for="contact">Contact</label>
                            <div class="col-sm-5" class="col-md-5" class="col-lg-5">
                                <input type="text" class="form-control" id="contact" placeholder="contact">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" class="control-label col-md-2" class="control-label col-lg-2" for="address">Address</label>
                            <div class="col-sm-5" class="col-md-5" class="col-lg-5">
                                <input type="text" class="form-control" id="adress" placeholder="adress">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" class="control-label col-md-2" class="control-label col-lg-2" for="Select Type">Select Status</label>
                            <div class="col-sm-5" class="col-md-5" class="col-lg-5">
                                 <select class="form-control" id="status">
                                    <option selected>Select Status</option>
                                    <option value="1">New</option>
                                    <option value="2">Initial</option>
                                    <option value="3">Processing</option>
                                    <option value="3">complete</option>


                                 </select>
                            </div>
                        </div>



                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-5" class="col-sm-8 col-sm-offset-5" class="col-lg-8 col-lg-offset-5">
                                <button type="button" class="btn btn-primary">
                                    create
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
