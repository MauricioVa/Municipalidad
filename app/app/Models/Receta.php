<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Receta
 *
 * @property $id
 * @property $farmaco_id
 * @property $Rut
 * @property $fechaemicion
 * @property $Comuna
 * @property $NombreApoderado
 * @property $RutApoderado
 * @property $RP_prescripcion
 * @property $AlternativaComercial
 * @property $ViaAdministracion
 * @property $Frecuencia
 * @property $PeriodoTratamiento
 * @property $created_at
 * @property $updated_at
 *
 * @property Cliente[] $clientes
 * @property Farmaco $farmaco
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Receta extends Model
{
    
    static $rules = [
		'farmaco_id' => 'required',
		'Rut' => 'required',
		'fechaemicion' => 'required',
		'Comuna' => 'required',
		'ViaAdministracion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['farmaco_id','Rut','fechaemicion','Comuna','NombreApoderado','RutApoderado','RP_prescripcion','AlternativaComercial','ViaAdministracion','Frecuencia','PeriodoTratamiento'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function clientes()
    {
        return $this->hasMany('App\Models\Cliente', 'receta_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function farmaco()
    {
        return $this->hasOne('App\Models\Farmaco', 'id', 'farmaco_id');
    }
    

}
