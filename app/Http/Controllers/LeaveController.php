<?php

namespace App\Http\Controllers;

use App\attendence;
use App\leave;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LeaveController extends Controller
{
    //
    public function apply_leave(Request $request)
    {
        $employee = DB::table("employees")
            ->where("employees.id", $request->session()->get('employee_id'))->first();
        return view("employee.apply_for_leave", compact("employee"));
    }

    public function store(Request $request)
    {
        //
        $attendence = new leave();
        $attendence->employee_id = $request->session()->get("employee_id");
        $attendence->f_date = $request->f_date;
        $attendence->t_date = $request->t_date;
        $attendence->title = $request->title;
        $attendence->details = $request->task_details;
        $attendence->status = 1;
        $attendence->save();
        return redirect("/leave/apply_leave");

    }
    public function apply_leave_list(Request $request){
        $attendence_list =  DB::table("employees")
            ->join("leaves","leaves.employee_id","employees.id")
            ->where("employees.id",$request->session()->get("employee_id"))->get();

        return view("employee.leave_list",compact("attendence_list"));

    }
    public function approve_list(Request $request){
        $attendence_list =  DB::table("employees")
            ->join("leaves","leaves.employee_id","employees.id")
            ->get();

        return view("leave_list",compact("attendence_list"));

    }
    public function approve($id,$key){
       $data = leave::find($id);
       $data->status = $key;
       $data->save();
       return redirect('/leave/approve_list');
    }
}
