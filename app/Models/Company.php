<?php

namespace App\Models;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{
    use HasFactory;

    public function scopeFilter($query, array $filters){
        if($filters['search'] ?? false){
            $query->where('name', 'like', '%' . request('search') .'%')
            ->orWhere('email', 'like', '%' . request('search') .'%')
            ->orWhere('website', 'like', '%' . request('search') .'%');
        }
    }


    //Relationship to Employee
    public function emp(){
        return $this->hasMany(Employee::class, 'company');
    }
}
