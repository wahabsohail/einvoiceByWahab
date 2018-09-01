@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @include('sidebar')
        <div class="col-md-9" class="col-sm-9" class="col-lg-9">
            <div class="panel panel-default">
                <div class="panel-heading" style="text-align: center;">View Contact</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-bordered">
                        <thead>
                            <th>Name</th>
                            <th>Business Name</th>
                            <th>Label Name</th>
                            <th>Contact</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Recive Payments</th>
                            <th>Action</th>
                        </thead>
                         <tbody>
                            <tr>
                                <td>Wahab</td>
                                <td>abc</td>
                                <td>abcd</td>
                                <td>0321557</td>
                                <td>Wahabsohail@gmail.com</td>
                                <td>new</td>
                                <td>xyz</td>
                                <td><button type="button" class="btn btn-warning">Edit</button></td>
                                
                            </tr>
                        </tbody> 
                    </table>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
