@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @include('sidebar')
        <div class="col-md-9" class="col-sm-9" class="col-lg-9">
            <div class="panel panel-default">
                <div class="panel-heading" style="text-align: center;">View Invoice</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-bordered">
                        <thead>
                            <th>Select Lable</th>
                            <th>Select Customer</th>
                            <th>Invoice Date</th>
                            <th>Due Date</th>
                            <th>Subject</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>abc</td>
                                <td>new</td>
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
