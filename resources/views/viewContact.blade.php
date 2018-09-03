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
                            {{-- <th>Label Name</th> --}}
                            <th>Contact</th>
                            <th>Email</th>
                            {{-- <th>Status</th>
                            <th>Recive Payments</th> --}}
                            <th>Address</th>
                            <th colspan="2" style="text-align: center;">Action</th>
                        </thead>
                        @foreach($crud as $crud)
                         <tbody>
                            <tr>
                                <td>{{$crud['Contact_Name']}}</td>
                                <td>{{$crud['Busniness_Name']}}</td>
                                <td>{{$crud['Contact_Number']}}</td>
                                <td>{{$crud['Email']}}</td>
                                <td>{{$crud['Contact_Address']}}</td>
                               {{--  <td>Wahabsohail@gmail.com</td>
                                <td>new</td>
                                <td>xyz</td> --}}
                                <td>
                                    <a href="{{action('contactController@edit',$crud['id'])}}" type="button" class="btn btn-info">Edit</a>

                                </td>
                                <td>
                                    <form 
                                    action="{{url('contact',$crud['id'])}}" 
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
