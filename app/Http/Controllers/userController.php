<?php

namespace eInvoice\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\addUser;
use DB;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
   
 



    public function index()
    {
        $viewUser=DB::table('add_users')->get();
        return view('viewAlluser', compact('viewUser'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createuser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // $user = user::create(['name' => $request->input('User_Name'), 
      //   'designation' => $request->input('User_Designation'), 
      //   'email'=>$request->input('Email'), 
      //   'password'=>$request->input('Password')  ]);  
        $data = [
            'User_Name' => $request->input('name'),
            'Email' => $request->input('email'),
            'Password' => $request->input('password'),
            'User_Designation'=>$request->input('designation')
        ];

        DB::table('add_users')->insert($data);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
