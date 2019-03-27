<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table ='categorias';
    protected $primaryKey = 'codcategoria';
    public $timestamps = false;


    protected $fillable =[
        'nombrecat', 
        'descripcioncat', 
        'menu', 
        'estado', 
        'userIng', 
        'fechaIng', 
        'userUpd', 
        'fechaUpd'
    ];

    protected $hidden =[];
}
