<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users=User::all();
        return view('user.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('user.create');
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
            // 'phone_no' =>'required',
        ]);

        $users= new User;
            $users->firstname = $request->input('firstname');
            $users->lastname = $request->input('lastname');
            $users->email= $request->input('email');
            $users->password= \Hash::make($request['password']);
            // $users->phone_no = $request->input('phone_no');
            // Hash::make($data['password']),
            // dd($request);
            $users->save();
            return redirect('/users');
    
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
        $users=User::find($id);
        return view('user.show')->with('users', $users);
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
        $users=User::find($id);
        return view('user.edit')->with('users', $users);
        
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
            'lastname' => 'required',
            'email' => 'required',
            'password' => 'required',
            // 'phone_no' =>'required',
        ]);

        $users= User::find($id);
            $users->firstname = $request->input('firstname');
            $users->lastname = $request->input('lastname');
            $users->email= $request->input('email');
            $users->password= \Hash::make($request['password']);
            // $users->phone_no = $request->input('phone_no');
            // Hash::make($data['password']),
            // dd($request);
            $users->save();
            return redirect('users');
    
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
