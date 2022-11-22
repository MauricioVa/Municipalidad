<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Farmacia
 *
 * @property $id
 * @property $procedencia_id
 * @property $NombreFarmacia
 * @property $DireccionFarmacia
 * @property $Responsable
 * @property $created_at
 * @property $updated_at
 *
 * @property Farmaco[] $farmacos
 * @property Procedencia $procedencia
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Farmacia extends Model
{
    
    static $rules = [
		'procedencia_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['procedencia_id','NombreFarmacia','DireccionFarmacia','Responsable'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function farmacos()
    {
        return $this->hasMany('App\Models\Farmaco', 'farmacia_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function procedencia()
    {
        return $this->hasOne('App\Models\Procedencia', 'id', 'procedencia_id');
    }
    

}
