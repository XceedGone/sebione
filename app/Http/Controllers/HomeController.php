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
            'companies' => Company::latest()->Paginate(10),
            'company' => Company::latest()->Paginate(5),
            'employee' => Employee::latest()->Paginate(5),
        ]);
    }

    public function showCompany(){
        return view('company.showAll',[
            'companies' => Company::latest()->Paginate(10),
        ]);
    }

    public function showEmployee(){
        return view('employees.showAll',[
            // 'employee' => Company::find($company->id)->emp()->latest()->Paginate(10),   
            'employee' => Employee::latest()->Paginate(10),
            'company' => Company::latest()->Paginate(10),

        ]);
    }


    
}
