<?php

namespace App\Http\Controllers;

use App\employee;
use App\User;
use Illuminate\Http\Request;

class authentication extends Controller
{
    //
    public function index_admin(){
        return view("login");
    }
    public function index_employee(){
        return view("employee.login");
    }
    public function logout(Request $request)
    {
        $request->session()->flush();

        return redirect("/admin");
    }
    public function logout_employee(Request $request)
    {
        $request->session()->flush();

        return redirect("/employee_login");
    }
    public function submit_admin(Request $request){
        $data = User::where([
            ["email", "=", $request->input("email")],
            ["password", "=", $request->input("password")]
        ])->get();
        if (count($data) == 1) {
            $request->session()->put("admin", $request->input("email"));
            return redirect("/");
        } else {
            return redirect("/admin")->with("success", "Login Failed");
        }
    }
    public function submit_employee(Request $request){
        $data = employee::where([
            ["email", "=", $request->input("email")],
            ["password", "=", $request->input("password")]
        ])->get();
        if (count($data) == 1) {
            $data = employee::where([
                ["email", "=", $request->input("email")],
                ["password", "=", $request->input("password")]
            ])->first();
            $request->session()->put("employee_email", $request->input("email"));
            $request->session()->put("employee_id",$data->id);
            return redirect("/employee_dashboard");
        } else {
            return redirect("/employee_login")->with("success", "Login Failed");
        }
    }

}
