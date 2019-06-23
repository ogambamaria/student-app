<?php

namespace App\Http\Controllers;

use App\Fees;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fees = Fees::all();

        $total = DB::table('fees')->sum('amount');

        return view('ogamba.paid',compact(['fees']))->with('total', $total);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ogamba.fees');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $full_name = DB::table('students')->where('student_no', $request->student_no)->value('full_name');
        $fee = new Fees();
        $fee->student_no = $request->student_no;
        $fee->full_name = $full_name;
        $fee->amount = $request->amount;
        $fee->payment_date = $request->payment_date;

        $fee->save();

        return redirect('paid');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $search = request('query');
        $students = Fees::with('relation2')->where('student_no', $search)->get();
        $fees = Fees::all();

        $totalStudent = DB::table('fees')->where('student_no', $search)->sum('amount');

        return view('ogamba.search', ['fees' => $students])->with('totalStudent', $totalStudent);
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
