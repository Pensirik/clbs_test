<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormSubmitData extends Model
{
    use HasFactory;
    protected $table = 'formSubmitData';
    protected $fillable = [
        'formSubmit_id',
        'name',
        'value'
    ];

    public function FormSubmit(){
        return $this->hasMany('App\FormSubmit','formSubmit_id','id');
    }


}
