<?php

namespace eInvoice\Http\Controllers;

use Illuminate\Http\Request;
use eInvoice\addUser;


class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
   
 



    public function index()
    {
        $viewUser= addUser::all()->toArray();
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
      $user = new addUser(['User_Name' => $request->get('name'), 
        'User_Designation' => $request->get('designation'), 
        'Email'=>$request->get('email'), 
        'Password'=>$request->get('password')]);

      $user->save();

        return redirect('user');

        // $data = [
        //     'User_Name' => $request->input('name'),
        //     'Email' => $request->input('email'),
        //     'Password' => $request->input('password'),
        //     'User_Designation'=>$request->input('designation')
        // ];

        // DB::table('add_users')->insert($data);
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
                 $viewUser=addUser::find($id);

                 return view('editUser',compact('viewUser','id'));

        // $editUser=DB::table('add_users')->where('id','=',$id)->first();
        // return view('editUser', compact('editUser'));



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

          $viewUser = addUser::find($id);
        $viewUser->User_Name = $request->get('name');
        $viewUser->Email = $request->get('email');
        $viewUser->Password = $request->get('password');
        $viewUser->User_Designation = $request->get('designation');

        $viewUser->save();
        return redirect('user');


        // $data = [
        //     'User_Name' => $request->input('name'),
        //     'Email' => $request->input('email'),
        //     'Password' => $request->input('password'),
        //     'User_Designation'=>$request->input('designation')
        // ];

        // DB::table('add_users')->where('id','=',$id)->update($data);
        // return redirect('user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $viewUser=addUser::find($id);
       $viewUser->delete();
       return redirect('user');

    }
}
