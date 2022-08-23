<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;
    protected $table = 'emplloyee';
    protected $fillable = ['first_name', 'last_name', 'phone', 'email', 'company'];
}