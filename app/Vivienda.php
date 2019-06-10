<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vivienda extends Model
{	
	/*
		Campos habilitados
	*/
    protected $fillable = ['c_habit', 'c_banios', 'colonia', 'tamanio', 'precio', 'municipio', 'departamento','categoria','negociable', 'estado'];

    /*
    	Clave primaria
    */
   	protected $primaryKey = "id_vivienda";
}
