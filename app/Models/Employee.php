<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = 'employees';
    protected $guarded = [];
    protected $fillable = ['nom', 'prenom', 'email', 'service', 'cin', 'salaire','hire_date','employee_type'];
}
