<?php

namespace App\Models;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{
    use HasFactory;


    //Relationship to Employee
    public function emp(){
        return $this->hasMany(Employee::class, 'company');
    }
}