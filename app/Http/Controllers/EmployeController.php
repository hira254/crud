<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    public function index(){
        $employees = Employe::all();
        return view("Employees",compact("employees"));
    }
      public function create(){
        return view("addEmployees");
    }
    
    public function store(Request $request){
    $employee = new Employe(); 
   $employee->employeName = $request->employeName;
   $employee->email = $request->email;
   $employee->password = $request->password;
   $employee->departement = $request->departement;
   $employee->city= $request->city;

   $employee->save();
   return redirect("/");
    }
 public function edit($id){
    $employee = Employe::find($id);
    return view("updateEmployees",compact("employee"));
    }
public function update($id, Request $request){
  $employee = Employe::find($id);
  $employee->employeName = $request->employeName;
   $employee->email = $request->email;
   $employee->password = $request->password;
   $employee->departement = $request->departement;
   $employee->city= $request->city;

    $employee->update();
    return redirect("/");
}
public function destory($id){
 $employee = Employe::find($id);
 $employee->delete();
 return redirect("/");
}
}
     
