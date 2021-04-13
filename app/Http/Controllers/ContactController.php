<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Mail\messagecontact;
use Mail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::all();
        return view('contact.index')->with('contacts', $contacts);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'=>'required',
            'email'=>'required',
            'phone_no'=>'required',
            'company'=>'required',
        ]);
        $contact= new Contact;
        $contact->name=$request->input('name');
        $contact->email=$request->input('email');
        $contact->phone_no=$request->input('phone_no');
        $contact->company=$request->input('company');
        $notificationEmail = 'ogbagahjb@gmail.com';
            $notificationEmail = 'ogbagahjb14@gmail.com';
            $notificationEmail = 'ogbagahjb@yahoo.com';
            $notificationEmail = 'cleansoul1960@yahoo.com';
            Mail::to($notificationEmail)->send(new Messagecontact($contact->name,$contact->company,$contact->email, $contact->phone_no));
        $contact->save();
        return redirect('/contact');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contacts = Contact::find($id);
        return view('contact.show')->with('contacts', $contacts);
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $contacts = Contact::find($id);
        return view('contact.show')->with('contacts', $contacts);
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
        // return 555;
        $this->validate($request, [
            'name'=>'required',
            'email'=>'required',
            'phone_no'=>'required',
            'company'=>'required',
        ]);
        // return 555;
        $contact= Contact::find($id);
        $contact->name=$request->input('name');
        $contact->email=$request->input('email');
        $contact->phone_no=$request->input('phone_no');
        $contact->company=$request->input('company');
        $contact->save();
        return redirect('/contact');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact=Contact::find($id);
        $contact->delete();
        return redirect('/contact');
    }
}
