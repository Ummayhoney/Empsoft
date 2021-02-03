<?php

namespace App\Http\Controllers;

use App\attendence;
use App\employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AttendenceController extends Controller
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
        //
        $attendence = new attendence();
        $attendence->date = $request->date;
        $attendence->employee_id = $request->session()->get("employee_id");
        $attendence->status = $request->status;
        $attendence->save();
        return  redirect("/attendence/give_attendence");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\attendence  $attendence
     * @return \Illuminate\Http\Response
     */
    public function show(attendence $attendence)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\attendence  $attendence
     * @return \Illuminate\Http\Response
     */
    public function edit(attendence $attendence)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\attendence  $attendence
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, attendence $attendence)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\attendence  $attendence
     * @return \Illuminate\Http\Response
     */
    public function destroy(attendence $attendence)
    {
        //
    }
    public function attendence_list(){
        return view("attendence_list");
    }
    public function attendence_give_attendence(Request $request){

        $employee = DB::table("employees")
            ->where("employees.id",$request->session()->get('employee_id'))->first();
        return view("employee.attendence_form",compact("employee"));
        //return view("employee.attendence_list",compact("employe"));
    }
    public function give_attendence_list(Request $request){

        $employee = DB::table("employees")
            ->join("attendences","attendences.employee_id","employees.id")
            ->where("employees.id",$request->session()->get('employee_id'))->get();

        return view("employee.attendence_list",compact("employee"));
    }
    public function search(Request $request){
        $attendence_data = DB::select("select first_name,last_name, count(employee_id) as total from employees, attendences where attendences.employee_id = employees.id GROUP by attendences.status,employees.first_name,employees.last_name ");
        return view("attendence_list_data",compact("attendence_data"));
    }
}
