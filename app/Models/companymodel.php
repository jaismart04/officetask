<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class companymodel extends Model
{
    use HasFactory;

    protected $table = 'company';
    protected $fillable = ['company_name', 'email', 'logo'];
}