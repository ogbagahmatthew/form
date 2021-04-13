<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $admins = User::all();
        return view('admin.index')->with('admins', $admins);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'password' => 'required',
            
        ]);

        //Create new post
        // dd($request->image);
            $admins= new User;
            $admins->firstname = $request->input('firstname');
            $admins->lastname = $request->input('lastname');
            // $admins->priviledge_id = 1;
            $admins->email= $request->input('email');
            $admins->password= Hash::make($request['password']);
            // Hash::make($data['password']),
            // dd($request);
            $admins->save();
            return redirect('/admin');
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
        $admins = User::find($id);
        return view('admin.show')->with('admins', $admins);
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
        $admins= User::find($id);
        return view('admin.edit')->with('admins', $admins);
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
        $this->validate($request,[
            'firstname' => 'required',
            // 'priviledge_id'=>'required',
            'lastname' => 'required',
            'email' => 'required',
            'password' => 'required',
            
        ]);

        //Create new post
        // dd($request->image);

            $admins= new User;
            $admins->firstname = $request->input('firstname');
            $admins->lastname = $request->input('lastname');
            // $admins->priviledge_id = 1;
            $admins->email= $request->input('email');
            $admins->password= \Hash::make($request['password']);
            $admins->save();
            return redirect('/admin');
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
        $admins = User::find($id);
        $admins->delete();
        return redirect('/dashboard');
    }
}

