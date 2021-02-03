<?php

namespace App\Http\Controllers;

use App\assign_task;
use App\employee;
use App\leave;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AssignTaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $assign_task = DB::table("employees")->join("assign_tasks","assign_tasks.e_id","employees.id")->get();
        return view("assign_task_list",compact("assign_task"));
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $task = new assign_task();
        $task->e_id = $request->e_id;
        $task->title = $request->title;
        $task->task_details = $request->task_details;
        $task->date = $request->date;
        $task->status =1 ;
        $task->save();
        return  redirect("/employee/assign_task");
    }

    /**
     * Display the specified resource.
     *
     * @param \App\assign_task $assign_task
     * @return \Illuminate\Http\Response
     */
    public function show(assign_task $assign_task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\assign_task $assign_task
     * @return \Illuminate\Http\Response
     */
    public function edit(assign_task $assign_task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\assign_task $assign_task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, assign_task $assign_task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\assign_task $assign_task
     * @return \Illuminate\Http\Response
     */
    public function destroy(assign_task $assign_task)
    {
        //
    }
    public function approve($id,$key){
        $data = assign_task::find($id);
        $data->status = $key;
        $data->save();
        return redirect('/employee/check_task');
    }
}
