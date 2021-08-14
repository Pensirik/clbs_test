<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormSubmit extends Model
{
    use HasFactory;
    protected $table = 'formSubmit';
    protected $fillable = [
        'date',
    ];

}
