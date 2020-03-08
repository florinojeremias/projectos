<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Escola;

class Area extends Model
{
    protected $fillable=[
        'nome_area','relator_principal','relator_adjunto'
    ];
    public  $rules=[
        'nome_area'=>           'required|max:200',
        'relator_principal'=>   'required|max:200',
        'relator_adjunto'=>     'required|max:200',

    ];
    public function escolas(){
        return $this->hasMany(Escola::class);
    }
}
