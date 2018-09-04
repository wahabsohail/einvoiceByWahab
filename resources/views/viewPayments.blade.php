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
                            <th>sr</th>
                            <th>Item</th>
                            <th>Qty</th>
                            <th>Unit Price</th>
                            <th>Total</th>
                            <th>Discount</th>
                            <th>Net Total</th>
                            <th>Status</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>abc</td>
                                <td>new</td>
                                <td>xyz</td>
                                <td>xyz</td>
                                <td>xyz</td>
                                <td>xyz</td>
                                <td>xyz</td>
                                <td>xyz</td>
                            </tr>
                        </tbody>
                    </table>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
