<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employee;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
     public function index()
    {
        return view('main-contents.index',[
            'companies' => Company::get(),
            'employees' => Employee::get(),
        ]);
    }

    public function showCompany(){
        return view('company.showAll',[
            'companies' => Company::latest()->filter(request(['search']))->Paginate(10),
        ]);
    }

    public function showEmployee(){
        
        $data = Employee::with('comp')->filter(request(['search']))->latest()->Paginate(10);

        return view('employees.showAll',[
            // 'employee' => Company::find($company->id)->emp()->latest()->Paginate(10),   
            // 'employee' => Employee::latest()->Paginate(10),
            // 'company' => Company::get(),
            'employee' => $data

        ]);
    }


    
}
