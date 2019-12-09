<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gpus extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'gpuses';

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
    protected $fillable = ['gpuID', 'arquitectura', 'frecuencia', 'memoria_de_video', 'categoria_id'];

    
}
