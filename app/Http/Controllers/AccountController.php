<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request,[
        'first_name'=>'required |max:100',
        'last_name'=>'required | max:100',
        'email'=>'required | email|max:150',
        'phone'=>'required |numeric|max:30',
        'username'=>'required',
        'password'=>'required',
        'birth_date'=>'required|before:date',
        'sex'=>'required | max:6',
        'grade'=>'required'

      ]);
      $account= new Account();
      $account->first_name =  $request->first_name;
      $account->last_name=   $request->last_name;
      $account->email=       $request->email;
      $account->phone=       $request->phone;
      $account->username =   $request->username;
      $account->password=    $request->password;
      $account->birth_date=  $request->birth_date;
      $account->sex =        $request->sex;
      $account->grade=       $request->grade;
      $account->save();

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
