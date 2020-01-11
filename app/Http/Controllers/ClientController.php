<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use App\client;

use Carbon\Carbon;

use DB;

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
            'first_name'=>'required',
            'middle_name'=>'required_if:type,individual',
            'last_name'=>'required',
            'phone'=>'required_if:type,individual',
            'email'=>'required_if:type,individual',
            'street_name'=>'required_if:type,individual',
            'apartment'=>'required_if:type,individual',
            'city'=>'required_if:type,individual',
            'country'=>'required_if:type,individual',
            'zipcode'=>'required_if:type,individual',
            'state'=>'required_if:type,individual',

            'passport'=>'required_if:type,individual',
            'iata_country_code'=>'required_if:type,individual',
          ]);

        DB::table('client')
        ->insert([
            'first_name'=>$request->get('first_name'),
            'middle_name' => $request->get('middle_name'),
            'last_name' => $request->get('last_name'),
            'phone' => $request->get('phone'),
            'email' => $request->get('email'), 
            'street_name'=>$request->get('street_name'),
            'apartment'=>$request->get('apartment'),
            'city'=>$request->get('city'),
            'country'=>$request->get('country'),
            'zipcode'=>$request->get('zipcode'),
            'state'=>$request->get('state'),
            'passport' => $request->get('passport'),
            'iata_country_code' => $request->get('iata_country_code'),
            'created_at'=>Carbon::now(),
            'updated_at'=>carbon::now(),


        ]);

        return redirect()->action('ClientController@index')
                        ->withSuccess(['Client Info is Created']);
        
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

    public function list(){
        return view('booking.main.reservationlist');


    }
}
