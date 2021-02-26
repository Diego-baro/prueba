<?php

namespace Parking\Http\Controllers;

use Parking\Userparking;
use Parking\Charge;
use Parking\Puts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parking = Userparking::all();
        return view('users.index', compact('parking'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $putr = 1;      
        if($request->input('vtype') == 2){
            $put = DB::table('puts')->select('put','type','state')->where('type','=',2)->where('state','=',1)->first();
            DB::update('UPDATE `puts` SET `state` = ? WHERE `puts`.`type` = ? and `puts`.`put` = ?', [0,$put->type, $put->put]);
            $rate = new Charge();
            $rate->type = $request->input('vtype');
            $rate->plate = $request->input('vplate');
            $rate->put = $put->put;
            $rate->state = $putr;
            $rate->save();
        }

        if($request->input('vtype') == 3){
            $put = DB::table('puts')->select('put','type','state')->where('type','=',3)->where('state','=',1)->first();
            DB::update('UPDATE `puts` SET `state` = ? WHERE `puts`.`type` = ? and `puts`.`put` = ?', [0,$put->type, $put->put]);
            $rate = new Charge();
            $rate->type = $request->input('vtype');
            $rate->plate = $request->input('vplate');
            $rate->put = $put->put;
            $rate->state = $putr;
            $rate->save();
        }

        if($request->input('vtype') == 4){
            $put = DB::table('puts')->select('put','type','state')->where('type','=',4)->where('state','=',1)->first();
            DB::update('UPDATE `puts` SET `state` = ? WHERE `puts`.`type` = ? and `puts`.`put` = ?', [0,$put->type, $put->put]);
            $rate = new Charge();
            $rate->type = $request->input('vtype');
            $rate->plate = $request->input('vplate');
            $rate->put = $put->put;
            $rate->state = $putr;
            $rate->save();
        }

        $userparking = new Userparking();
        $userparking->iduser = $request->input('iduser');
        $userparking->uname = $request->input('uname');
        $userparking->ulname = $request->input('ulname');
        $userparking->vtype = $request->input('vtype');
        $userparking->vbrand = $request->input('vbrand');
        $userparking->vplate = $request->input('vplate');
        $userparking->vdate = $request->input('vdate');
        $userparking->slug = $request->input('iduser');
        $userparking->save();

        $data =  DB::select('SELECT plate,iduser,put, p.created_at FROM `userparkings` as p inner join charges as c where p.vplate = c.plate AND p.iduser = ?',[$request->input('iduser')]);


        $pdf = PDF::loadView('comprobante', compact('data'));

        return $pdf->download('comprobante.pdf');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
       $user = Userparking::where('slug','=',$slug)->firstOrFail(); 
       return view('users.show', compact('user'));
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
