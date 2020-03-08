<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Area;
use App\Models\Turmas;

class Escola extends Model
{
    protected $fillable=[
        'nome_escola','relator_principal','relator_adjunto','area_id'
    ];

    public function area(){

        return $this->belongsTo(Area::class,'area_id');
    }
    public function turmas(){
        return $this->hasMany(Turmas::class);
    }
    //rules  for Escola input vaidation
    public $rules=[
        'nome_escola'=>      'required|min:4|max:100',
        'relator_principal'=> 'required|min:4|max:100',
        'relator_adjunto'=>  'required|min:4|max:100',
        'area_id'       =>    'required'
    ];
}
