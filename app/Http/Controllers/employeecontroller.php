<?php

namespace App\Http\Controllers;

use App\Models\employee;
use App\Models\companymodel;
use Illuminate\Http\Request;


class employeecontroller extends Controller
{
    public function index()
    {
        $employee = employee::orderBy('id', 'desc')->simplePaginate(10);
        return view('employee.employee', compact('employee'));
    }

    public function add_employee()
    {
        $company =  companymodel::select('id', 'company_name')->get();
        return view('employee.add', compact('company'));
    }

    public function save(request $request)
    {
        $validateData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'company' => 'required',

        ]);



        $employee = new employee;
        $employee->company_id = $request->company_id;
        $employee->company = $request->company;
        $employee->first_name = $request->first_name;
        $employee->last_name = $request->last_name;
        $employee->email = $request->email;
        $employee->phone = $request->phone;

        $employee->save();
        $error_message = new login();
        $error_message->setSession(true, 'Employee successfully saved.');

        return redirect()->action([employeecontroller::class, 'index']);
    }

    public function edit($id)
    {
        $employee =  employee::find($id);
        return view('employee.employee_edit', compact('employee'));
    }

    public function update(request $request)
    {

        $employee = employee::find($request->id);
        $employee = new employee;
        $employee->company_id = $request->company_id;
        $employee->company = $request->company;
        $employee->first_name = $request->first_name;
        $employee->last_name = $request->last_name;
        $employee->email = $request->email;
        $employee->phone = $request->phone;

        $employee->save();
        $error_message = new login();
        $error_message->setSession(true, 'Employee  successfully updated.');
        return redirect()->action([employeecontroller::class, 'index']);
    }

    public function delete($id)
    {

        $employee =  employee::find($id);
        $employee->delete();
        $error_message = new login();
        $error_message->setSession(true, 'Company  successfully Deleted.');
        return back();
    }
}