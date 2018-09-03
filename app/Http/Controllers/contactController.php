<?php

namespace eInvoice\Http\Controllers;

use Illuminate\Http\Request;
use eInvoice\contact;

class contactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $crud=contact::all()->toArray();
        return view('viewContact',compact('crud'));
    //   $cruds=crud::all()->toArray();
    // return view('crud.index', compact('cruds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('addContact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $crud= new contact(['Contact_Name'=>$request->get('name'),
         'Busniness_Name'=>$request->get('businessName'),
          'Email'=>$request->get('email'),
           'Contact_Number'=>$request->get('contact'),
           'Contact_Address'=>$request->get('adress')
       ]);

        //  $user = new addUser(['User_Name' => $request->get('name'), 
        // 'User_Designation' => $request->get('designation'), 
        // 'Email'=>$request->get('email'), 
        // 'Password'=>$request->get('password')]);

      $crud->save();

        return redirect('contact');
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
         $crud=contact::find($id);
         return view('editContact',compact('crud','id'));
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
         $crud = contact::find($id);
        $crud->Contact_Name = $request->get('name');
        $crud->Email = $request->get('email');
        $crud->Contact_Number=$request->get('contact');
        $crud->Busniness_Name= $request->get('businessName');
        $crud->Contact_Address=$request->get('adress');

        $crud->save();
        return redirect('contact');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $crud=contact::find($id);
       $crud->delete();
       return redirect('contact');
    }
}
// public function addContact(){

//     return view('addContact');
//    }

//    public function viewContact(){

//     return view('viewContact');
//    }
