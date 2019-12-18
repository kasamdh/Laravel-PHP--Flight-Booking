<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\client;

use Carbon\Carbon;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('booking.main.createreservation');
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
        $validateData = $request->validate([
            ''=>'required',
            
            ''=>'required',
            ''=>'required_if:type,individual',
            ''=>'required_if:type,individual',
            ''=>'required_if:type,individual',
            ''=>'required',
          ]);
        DB::table('client')
        ->insert([
            'first_name'=>$request->get(''),
            'middle_name' => $request->get(''),
            'last_name' => $request->get(''),
            'phone' => $request->get(''),
            'email' => $request->get(''),
            'passport' => $request->get(''),
            'iata_country_code' => $request->get(''),
            'active_12' => $request->get(''),
            'created_at'=>Carbon::now(),
            'updated_at'=>carbon::now(),


        ]);
        
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
