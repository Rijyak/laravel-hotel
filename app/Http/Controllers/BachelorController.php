<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bachelor;

class BachelorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      

        return view('rooms');
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
            'name'=> 'required',
            'address'=> 'required',
            'phone'=> 'required',
            'email'=> 'required',
            'checkin'=> 'required',
            'checkout'=> 'required',
        ]);

        $brooms = new Bachelor;

        $brooms -> name = $request->input('name');
        $brooms -> address = $request->input('address');
        $brooms -> phone = $request->input('phone');
        $brooms -> email = $request->input('email');
        $brooms -> checkin = $request->input('checkin');
        $brooms -> checkout = $request->input('checkout');

        $brooms -> save();

        return redirect('/rooms')-> with('success', 'Reserved Room on Your Date');
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
