@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @include('sidebar')
        <div class="col-md-9" class="col-sm-9" class="col-lg-9">
            <div class="panel panel-default">
                <div class="panel-heading" style="text-align: center;">Home</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <center>

                     <form class="form-inline">
                        <div class="form-group">
                            <div class="col-md-4" class="col-sm-4" class="col-lg-4">
                                <button type="button" class="btn btn-primary">
                                    Total Clients
                                </button>
                            </div>
                        </div>

                         <div class="form-group">
                            <div class="col-md-4" class="col-md-4" class="col-sm-4" class="col-lg-4">
                                <button type="button" class="btn btn-primary">
                                    Total Amount 
                                </button>
                            </div>
                        </div>

                         <div class="form-group">
                            <div class="col-md-4" class="col-md-4" class="col-sm-4" class="col-lg-4">
                                <button type="button" class="btn btn-primary">
                                Pending Amount
                                </button>
                            </div>
                        </div><br><br>


                         <div class="form-group">
                            <div class="col-md-4" class="col-md-4" class="col-sm-4" class="col-lg-4">
                                <button type="button" class="btn btn-primary">
                                    Paid Amount
                                </button>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-4" class="col-md-4" class="col-sm-4" class="col-lg-4">
                                <button type="button" class="btn btn-primary">
                                    Deu Invoice
                                </button>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-4" class="col-md-4" class="col-sm-4" class="col-lg-4">
                                <button type="button" class="btn btn-primary">
                                    Total Lables
                                </button>
                            </div>
                        </div><br><br><br>
                         
                     </form>
                     </center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
