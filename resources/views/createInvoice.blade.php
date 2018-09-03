@extends('layouts.app')

@section('content')
<script type="text/javascript" src="/js/invoiceCalculation.js"></script>
<script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
<div class="container">
    <div class="row">
        @include('sidebar')
        <div class="col-md-9" class="col-sm-9" class="col-lg-9">
            <div class="panel panel-default">
                <div class="panel-heading" >Generate Invoice</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    </div>
                    {{-- Form Creat Invoice --}}

                    <form class="form-inline">
                        {{-- select label input --}}
                        
                        {{-- <div class="form-group">
                          <div class="col-sm-6">  <label for="Select Label">Select Label</label></div>
                            <div class="col-sm-3" >
                                 <select class="form-control" id="selectLabel">
                                    <option selected>Select Label</option>
                                    <option value="1">New</option>
                                    <option value="2">Initial</option>
                                    <option value="3">Processing</option>
                                    <option value="3">complete</option>
                                 </select>
                            </div>
                        </div> --}}

                         {{-- select custom input --}}

                         {{-- <div class="form-group">
                            <label class="col-sm-6" for="select Customer">Select Customer </label>
                            <div class="col-sm-3">
                                <select class="form-control" id="selectCustomer">
                                    <option > Select Customer</option>
                                    <option>1</option>
                                    <option>2</option>
                                    
                                </select>
                            </div>
                             
                         </div><br><br><br> --}}

                         {{-- Invoice Number --}}

                         <div class="form-group">
                          <div class="col-sm-5"><label for="Invoice Date">Invoice Date</label></div>
                            <div class="col-sm-3"> <input type="date" name="invoiceDate" id="invoiceDate" class="form-control" ></div>
                         </div>
                         {{-- Due Date --}}
                           
                         <div class="form-group">
                           <div class="col-sm-6"><label for="Due date">Due Date</label></div>
                            <div class="col-sm-3"><input type="date" name="Due Date" id="dueDate" class="form-control"></div>
                             
                         </div><br><br><br>
                         {{-- Subject --}}

                         <div class="form-group">
                           <div class="col-sm-3"><label for="Subject">Subject</label></div>
                            <div class="col-sm-7" ><input type="text" name="subject" id="subject" class="form-control" placeholder="Subject" size="45"></div>
                             
                         </div><br><br><br>

                         {{--  Create Table  --}}

                        <table class="table table-bordered" id="myTable">
                            <thead>
                                <th>Sr</th>
                                <th >Item</th>
                                <th>Qty</th>
                                <th>Unit Price</th>
                                <th>Total</th>
                                <th  >Action</th>
                            </thead>
                            <tbody>
                            <tr>
                                <td><input id="sr" type='text' name='sr' size='1' class='form-control'></td>
                                <td><input id="item" type='text' name='Item'  class='form-control'></td>
                                <td><input id="qty" type='text' name='Qty' size='1' class='form-control' onchange="calculation()" ></td>
                                <td><input id="unitPrice" type='text' name='UnitPrice'   class='form-control' 
                                    onchange="calculation()"></td>
                                <td><input id="total1" type='text' name='Total'  size='10' class='form-control' ></td>
                                 <td><button type='button' class='btn btn-primary' onClick='myCreateFunction()'>ADD</button></td>
                                <!--<td><button type='button' class='btn btn-danger' value='Delete' onclick='deleteRow(this.parentNode.parentNode.rowIndex)'>
                                Delete</button></td>-->
                                
                            </tr>
                        </tbody>
                             

                         </table><br><br>
                         {{-- Total Price --}}

                   
                        <div class="form-group">
                            <div class="col-sm-5"><label for="Grand Total">Grand Total </label></div>
                            <div class="col-sm-4" ><input type="text" name="total" id="grandTotal" class="form-control" placeholder="Grand Total"></div>
                        </div><br><br>

                        {{-- Discount Input --}}

                        <div class="form-group">
                            <div class="col-sm-5"><label for="Discount">Discount</label></div>
                            <div class="col-sm-4" ><input type="text" name="discount" id="discount" class="form-control" onchange="calculation()" placeholder="Discount"></div>
                        </div><br><br>


                        {{-- Net Total--}}

                        <div class="form-group">
                            <div class="col-sm-5"><label for="Net Total">Net Total</label></div>
                            <div class="col-sm-4" ><input type="text" name="netTotal" id="netTotal" class="form-control" placeholder="Net Total"></div>
                        </div><br><br><br>

                        {{-- terms and condition --}}

                        <div class="form-group">
                            <div class="col-sm-5"><label for="TermAndCondition">Term & Condition</label></div>
                            <br><br>
                            <div ><textarea id="termCondition" class="form-control"  rows="5" cols="100"></textarea></div>
                            
                        </div><br><br><br>

                        {{-- textarea bar --}}

                        <section>
                            <script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script><script> tinymce.init({selector:'textarea'});</script>
                        </section>

                        {{-- status --}}

                        <div class="form-group">
                            <div class="col-sm-3"><label for="status">Status</label></div>
                            <div class="col-sm-2" ><input type="text" name="status" id="status" class="form-control" placeholder="status" size="38"></div>
                        </div><br><br><br>

                        {{-- Button --}}

                        <center>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-5" class="col-sm-8 col-sm-offset-5" class="col-lg-8 col-lg-offset-5">
                                <button type="button" class="btn btn-primary">
                                    Create
                                </button>

                            </div>
                        </div>


                         <div class="form-group">
                            <div class="col-md-8 col-md-offset-5" class="col-sm-8 col-sm-offset-5" class="col-lg-8 col-lg-offset-5">
                                <button type="button" class="btn btn-danger">
                                    Cancel
                                </button>
                                
                            </div>
                        </div><br><br><br>
                    </center>

                        
                        
                        
                      





                       


                        
                    </form>
                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
