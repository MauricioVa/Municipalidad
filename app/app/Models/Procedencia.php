<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Procedencia
 *
 * @property $id
 * @property $NombreProcedencia
 * @property $Lote
 * @property $created_at
 * @property $updated_at
 *
 * @property Farmacia[] $farmacias
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Procedencia extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['NombreProcedencia','Lote'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function farmacias()
    {
        return $this->hasMany('App\Models\Farmacia', 'procedencia_id', 'id');
    }
    

}
