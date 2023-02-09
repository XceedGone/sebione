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
            'phone' => ['required' , 'numeric']
        ]);

        $id = $formFields['company'];
   
        Employee::create($formFields);
        return redirect('/company/'.$id)->with('alert-success','Created Successfully!');
    }

    //Delete Company 
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return back()->with('alert-danger','Deleted Successfully!');
    }

    //show edit view
    public function edit(Employee $employee)
    {
        return view('employees.edit', [
            'employee' => $employee,
        ]);
    }

    public function update(Employee $employee){
        $formFields = request()->validate([
            //Unique parameter is: unique('databaseTable' , 'columnName')
            'firstname' => ['required'],
            'lastname' => ['required'],
            'company' => ['required'],
            'email' => ['email' , 'required'],
            'phone' => ['required' , 'numeric']
        ]);
 
        $employee->update($formFields);
        $id = $formFields['company'];
        return redirect('/company/'.$id)->with('alert-success','Update Successfully!');
    }




}
