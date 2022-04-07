<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts =[
        'estado' => 'array'
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
