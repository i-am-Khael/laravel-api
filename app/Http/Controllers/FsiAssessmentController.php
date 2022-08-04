<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\FsiAssessment;

class FsiAssessmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return FsiAssessment::orderBy('name')->get();
        // $all = DB::select('name')->from('fsi_assessments');
        $all = DB::select('SELECT * FROM fsi_assessments ORDER BY date_of_birth DESC');
        return $all;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->input('name');
        $dob = $request->input('date_of_birth');
        $address = $request->input('address');
        $query = DB::insert('INSERT INTO fsi_assessments (name, date_of_birth, address) VALUES (?, ?, ?)', [$name, $dob, $address]);
        return response()->json(["status: Registered Successfully!"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $query = DB::select('SELECT * FROM fsi_assessments WHERE id = ?', [$id]);
        return response()->json($query);
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
        $name = $request->input('name');
        $dob = $request->input('date_of_birth');
        $address = $request->input('address');
        $query = DB::update('UPDATE fsi_assessments set name = ?, date_of_birth = ?, address = ? where id = ?', [$name, $dob, $address, $id]);
        return response()->json(['status: Updated Successfully!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $query = DB::delete('DELETE FROM fsi_assessments WHERE id = ?', [$id]);
        return response()->json(['status: Deleted Successfully!']);
    }
}
