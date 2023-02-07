<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CompanyController extends Controller
{
    
    // public function show(Employee $employee){
    //     return view('show',[
    //         'employee' => $employee
    //     ]);
    // }

    // public function index()
    // {
    //     return view('main-contents.index',[
    //         'companies' => Company::latest()->Paginate(10),
    //         'company' => Company::latest()->Paginate(5),
    //         'employee' => Employee::latest()->Paginate(5),

    
    //     ]);
    // }

    // public function showAll(){
    //     return view('company.showAll',[
    //         'companies' => Company::latest()->Paginate(10),
    //     ]);
    // }

    public function edit(Company $company)
    {
        return view('main-contents.edit', [
            'company' => $company
        ]);
    }


    //Delete Company 
    public function destroy(Company $company)
    {
        //Checks if logged in user owns the listing
        // if($company->user_id != auth()->id()){
        //     abort(403,'Unauthorized action');
        // }

        $company->delete();
        return redirect('/home')->with('message','Deleted Successfully!');
    }

    //show data from database 
    public function show(Company $company){    
        return view('main-contents.show', [
            'employee' => Company::find($company->id)->emp()->latest()->Paginate(10),   
            'company' => $company
        ]);
    }
    
    //show create form
    public function create(){
        return view('main-contents.create');
    }

    //store data to database 
    public function store(){

        $formFields = request()->validate([
            //Unique parameter is: unique('databaseTable' , 'columnName')
            'name' => ['required' , Rule::unique('companies' , 'name')],
            'email' => ['required', 'email'],
            'website' => 'required',
        ]);
        //Check if there is a image uploaded
        //store it in logos folder in public folder
        if(request()->hasFile('logo')){
            $formFields['logo'] = request()->file('logo')->store('logos','public');
        }

        Company::create($formFields);

        return redirect('/home')->with('message','Created Successfully!');

    }

    //Update data

    public function update(Company $company){

        //Checks if logged in user owns the listing
        // if($listing->user_id != auth()->id()){
        //     abort(403,'Unauthorized action');
        // }

        $formFields = request()->validate([
            //Unique parameter is: unique('databaseTable' , 'columnName')
            'name' => ['required'],
            'email' => ['required', 'email'],
            'website' => 'required',
        ]);
        //Check if there is a image uploaded
        //store it in logos folder in public folder
        if(request()->hasFile('logo')){
            $formFields['logo'] = request()->file('logo')->store('logos','public');
        }

        $company->update($formFields);

        return back()->with('message', 'Update Successfully!');
    }


}
