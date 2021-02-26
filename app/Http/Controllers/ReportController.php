<?php

namespace Parking\Http\Controllers;

use Parking\Userparking;
use Parking\Charge;
use Parking\Puts;
use Parking\Rates;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;


class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('reports.index');
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
        //
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

    public function reporteA($idguest, $idbook)

    {
      $data =  DB::select('SELECT put, count(*) rankin FROM charges where created_at between created_at AND updated_at group by put order by rankin DESC');

      $pdf = PDF::loadView('reportea', compact('data'));

      return $pdf->download('reporteA.pdf');

    }

    public function reporteB($idguest, $idbook)

    {
      $data =  DB::select('SELECT put, count(*) rankin FROM charges where created_at between created_at AND updated_at group by put order by rankin DESC');

      $pdf = PDF::loadView('reporteb', compact('data'));

      return $pdf->download('reporteB.pdf');

    }

     public function reporteC($idguest, $idbook)

    {
        //(SQL: SELECT c.type, r.vtype, count(*) rankin FROM rates AS r INNER JOIN charges AS c WHERE c.type = r.id and c.created_at between c.created_at AND c.updated_at group by c.type order by rankin

      $data =  DB::select('SELECT type, count(*) rankin FROM charges where created_at between created_at AND updated_at group by type order by rankin DESC');

      $pdf = PDF::loadView('reportec', compact('data'));

      return $pdf->download('reporteC.pdf');

    }

     public function reporteD($idguest, $idbook)

    {
      $data =  DB::select('SELECT put, count(*) rankin FROM charges where created_at between created_at AND updated_at group by put order by rankin DESC');

      $pdf = PDF::loadView('reported', compact('data'));

      return $pdf->download('reporteD.pdf');

    }
}
