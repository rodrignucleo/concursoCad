<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts =[
        'cidade' => 'array'
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
