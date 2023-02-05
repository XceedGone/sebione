<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    
    // public function show(Employee $employee){
    //     return view('show',[
    //         'employee' => $employee
    //     ]);
    // }

    public function show(Company $company){    
        return view('show', [
            'employee' => Company::find($company->id)->emp()->get(),   
            'company' => $company
        ]);
    }
}
