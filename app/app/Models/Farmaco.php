<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Farmaco
 *
 * @property $id
 * @property $farmacia_id
 * @property $NombreFarmaco
 * @property $Dosis
 * @property $Laboratorio
 * @property $ProcedenciaNombre
 * @property $Cantidad
 * @property $FechaVencimiento
 * @property $imagen
 * @property $created_at
 * @property $updated_at
 *
 * @property Farmacia $farmacia
 * @property Receta[] $recetas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Farmaco extends Model
{
    
    static $rules = [
		'farmacia_id' => 'required',
		'NombreFarmaco' => 'required',
		'Cantidad' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['farmacia_id','NombreFarmaco','Dosis','Laboratorio','ProcedenciaNombre','Cantidad','FechaVencimiento','imagen'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function farmacia()
    {
        return $this->hasOne('App\Models\Farmacia', 'id', 'farmacia_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function recetas()
    {
        return $this->hasMany('App\Models\Receta', 'farmaco_id', 'id');
    }
    

}
