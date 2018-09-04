<?php

namespace eInvoice\Http\Controllers;

use Illuminate\Http\Request;
Use eInvoice\payment;

class paymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $crud=payment::all()->toArray();
        return view('viewPayments',compact('crud'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('receivePayment');
 }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $crud=new payment(['Amount'=>$request->get('amount'),
            'Recevied_Payments'=>$request->get('received'),
            'Remaining_Payments'=>$request->get('remaining'),
            'Remarks'=>$request->get('remark')
        ]);

        $crud->save();
        return redirect('payment');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $crud=payment::find($id);
        return view('editPayments',compact('crud','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $crud=payment::find($id);
        $crud->Amount=$request->get('amount');
        $crud->Recevied_Payments=$request->get('received');
        $crud->Remaining_Payments=$request->get('remaining');
        $crud->Remarks=$request->get('remark');

        $crud->save();
        return redirect('payment');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $crud=payment::find($id);
        $crud->delete();
        return redirect('payment');
    }
}
