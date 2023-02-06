<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employee;
use Illuminate\Http\Request;
 

class EmployeeController extends Controller
{
    //show create form
    public function create(Company $company){
        return view('employees.create',[
            'company' => $company
        ]);
    }

    //store data to database 
    public function store(Company $company){
        $formFields = request()->validate([
            //Unique parameter is: unique('databaseTable' , 'columnName')
            'firstname' => ['required'],
            'lastname' => ['required'],
            'company' => ['required'],
            'email' => ['email' , 'required'],
            'phone' => 'required'
        ]);

        Employee::create($formFields);
        $id = $company->id;

        return redirect('/home')->with('message','Created Successfully!');

    }
}
