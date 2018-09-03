@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @include('sidebar')
        <div class="col-md-9" class="col-sm-9" class="col-lg-9">
            <div class="panel panel-default">
                <div class="panel-heading" style="text-align: center;">View All User</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-bordered">
                        <thead>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th colspan="2" style="text-align: center;">Action</th>
                        </thead>
                        @foreach($viewUser as $viewUser)
                        <tbody>
                            <tr>
                                <td>{{$viewUser['User_Name']}}</td>
                                <td>{{$viewUser['User_Designation']}}</td>
                                <td>{{$viewUser['Email']}}</td>
                                <td>{{$viewUser['Password']}}</td>

                                <td>
                                    <a href="{{action('userController@edit',$viewUser['id'])}}" type="button" class="btn btn-info">Edit</a>

                                </td>

                                <td>
                                    <form 
                                    action="{{url('user',$viewUser['id'])}}" 
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
