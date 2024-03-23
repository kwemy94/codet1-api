<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ErrorManger extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'action', 'message'];
}
