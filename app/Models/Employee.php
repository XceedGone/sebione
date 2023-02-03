<?php

namespace App\Models;

use App\Models\Company;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee extends Model
{
    use HasFactory;

    //Relationship to company
    public function comp(){
        return $this->belongsTo(Company::class, 'company');
    }
}
