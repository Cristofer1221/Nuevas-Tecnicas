<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disco extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'discos';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['discoID', 'tipo', 'capacidad', 'vellectura', 'velescritura', 'categoria_id'];

    
}
