<?php

namespace App\Models;

use App\Models\Company;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee extends Model
{
    use HasFactory;

    public function scopeFilter($query, array $filters){
        if($filters['search'] ?? false){
            $query->where('firstname', 'like', '%' . request('search') .'%')
            ->orWhere('lastname', 'like', '%' . request('search') .'%')
            ->orWhere('email', 'like', '%' . request('search') .'%')
            ->orWhere('phone', 'like', '%' . request('search') .'%');
        }
    }

    //Relationship to company
    public function comp(){
        return $this->belongsTo(Company::class, 'company');
    }
}
