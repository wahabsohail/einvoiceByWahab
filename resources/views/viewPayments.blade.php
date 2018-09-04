@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @include('sidebar')
        <div class="col-md-9" class="col-sm-9" class="col-lg-9">
            <div class="panel panel-default">
                <div class="panel-heading" style="text-align: center;">View Payments</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-bordered">
                        <thead>
                            <th>Amount</th>
                            <th>Recevied_Payments</th>
                            <th>Remaining_Payments</th>
                            <th>Remarks</th>
                            <th colspan="2" style="text-align: center;">Action</th>
                            
                        </thead>
                        @foreach($crud as $crud)

                        <tbody>
                            <tr>
                                <td>{{$crud['Amount']}}</td>
                                <td>{{$crud['Recevied_Payments']}}</td>
                                <td>{{$crud['Remaining_Payments']}}</td>
                                <td>{{$crud['Remarks']}}</td>
                                <td>
                                    <a href="{{action('paymentController@edit',$crud['id'])}}" 
                                    type="button" class="btn btn-info">Edit</a>
                                </td>
                                <td>
                                    <form 
                                    action="{{url('payment',$crud['id'])}}" 
                                    method="post">
                                        {{csrf_field()}}
                                        <input type="hidden" name="_method" value="delete">
                                        <button class="btn btn-danger" type="submit" 
                                        value="delete">
                                            Delete
                                        </button>
                                        
                                    </form>
                                        
                                </td>
                                
                            </tr>
                        </tbody>
                        @endforeach
                    </table>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
