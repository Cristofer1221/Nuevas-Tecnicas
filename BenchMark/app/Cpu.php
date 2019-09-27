<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cpu extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cpus';

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
    protected $fillable = ['ClockSpeed', 'TurboClockSpeed', 'Cores', 'Socket', 'Marca', 'Foto', 'categoria_id'];

    
}
