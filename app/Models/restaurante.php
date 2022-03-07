<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class restaurante extends Model
{

 /* De esta forma defino el nombre de la tabla , evitando que se agregue una s al final  */
    protected $table = "restaurante";
    protected $filiable =['nombre','categoria','precio','ruta'];
    use HasFactory;

}
