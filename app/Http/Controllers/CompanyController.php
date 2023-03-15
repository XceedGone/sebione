<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Log;

class CompanyController extends Controller
{
    public function edit(Company $company)
    {
        return view('main-contents.edit', [
            'company' => $company
        ]);
    }

    //Delete Company 
    public function destroy(Company $company)
    {
        $company->delete();
        return redirect('/show-companies')->with('alert-danger', 'Deleted Successfully!');
    }

    //show data from database 
    public function show(Company $company)
    {
        return view('main-contents.show', [
            'employee' => Company::find($company->id)->emp()->latest()
                ->filter(request(['search']))->Paginate(10),
            'company' => $company
        ]);
    }

    //show create form
    public function create()
    {
        return view('main-contents.create');
    }

    //store data to database 
    public function store(Company $company)
    {
   
        $formFields = request()->validate([
            //Unique parameter is: unique('databaseTable' , 'columnName')
            'name' => ['required', Rule::unique('companies', 'name')],
            'email' => ['required', 'email'],
            'website' => 'required',
            'logo' => 'required'
        ]);
        //Check if there is a image uploaded
        //store it in logos folder in public folder
        if (request()->hasFile('logo')) {
            request()->validate([
                'logo' => 'dimensions:min_width=100,min_height=200',
            ]);

            $formFields['logo'] = request()->file('logo')->store('logos', 'public');
 

            $company->create($formFields);

            return redirect('/show-companies')->with('alert-success', 'Created Successfully!');
        }
    }

    //Update data
    public function update(Company $company)
    {
        $formFields = request()->validate([
            //Unique parameter is: unique('databaseTable' , 'columnName')
            'name' => ['required'],
            'email' => ['required', 'email'],
            'website' => 'required',
        ]);
        //Check if there is a image uploaded
        //store it in logos folder in public folder
        if (request()->hasFile('logo')) {
            $formFields['logo'] = request()->file('logo')->store('logos', 'public');
        }

        $company->update($formFields);

        return redirect('/show-companies')->with('alert-success', 'Update Successfully!');
    }
}
