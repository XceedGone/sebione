<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employee;
use Illuminate\Http\Request;
 

class EmployeeController extends Controller
{

    // public function index()
    // {
    //     return view('main-contents.index',[
    //         'companies' => Company::latest()->Paginate(10),
    //         'company' => Company::latest()->Paginate(5),
    //         'employee' => Employee::latest()->Paginate(5),

    //     ]);
    // }

    // public function showAll(){
    //     return view('employees.showAll',[
    //         // 'employee' => Company::find($company->id)->emp()->latest()->Paginate(10),   
    //         'employee' => Employee::latest()->Paginate(10),
    //         'company' => Company::latest()->Paginate(10),

    //     ]);
    // }



    //show create form
    public function create(Company $company){
        return view('employees.create',[
            'company' => $company
        ]);
    }

    //store data to database 
    public function store(){ 
        $formFields = request()->validate([
            //Unique parameter is: unique('databaseTable' , 'columnName')
            'firstname' => ['required'],
            'lastname' => ['required'],
            'company' => ['required'],
            'email' => ['email' , 'required'],
            'phone' => 'required'
        ]);
      
        Employee::create($formFields);

        return redirect('/home')->with('message','Created Successfully!');

    }
}
