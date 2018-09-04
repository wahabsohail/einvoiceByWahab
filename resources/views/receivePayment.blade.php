@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @include('sidebar')
        <div class="col-md-9" class="col-sm-9" class="col-lg-9">
            <div class="panel panel-default">
                <div class="panel-heading" >Recive Payments </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    

                    <form class="form-inline" method="post" action={{url('payment')}}>
                      {{csrf_field()}}
                        {{--  <div class="form-group">
                            <label class="control-label col-sm-5" class="col-md-5" class="col-lg-5" for="Select Type">Select Type</label>
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
                         &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<label for="amount" class="form-group">Amount</label>
                          <input type="text" class="form-control" id="amount" placeholder="amount" name="amount">
                        </div> <br><br>

                         <div class="form-group">
                            &nbsp;  &nbsp;  &nbsp;  &nbsp; <label class="form-group" for="received">Recevied</label>
                          <input type="text" class="form-control" id="received" placeholder="received" name="received">
                        </div>

                        <div class="form-group">
                            &nbsp;  &nbsp;  &nbsp;  &nbsp; <label class="form-group" for="Remaining">Remaining</label>
                          <input type="text" class="form-control" id="remaining" placeholder="Remaining" name="remaining">
                        </div><br><br>

                         <div class="form-group">
                            &nbsp;  &nbsp;  &nbsp;  &nbsp; <label class="form-group" for="remark">Remarks</label>
                          <textarea class="form-control" id="remark" placeholder="Remarks" name="remark" rows='3' cols="30"></textarea>

                        </div><br><br>

                         &nbsp;  &nbsp;  &nbsp;  &nbsp;  <div class="form-group">
                            <div class="col-md-8 col-md-offset-5" class="col-sm-8 col-sm-offset-5" class="col-lg-8 col-lg-offset-5">
                                <button type="submit" class="btn btn-primary">
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
