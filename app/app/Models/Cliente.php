<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 *
 * @property $id
 * @property $receta_id
 * @property $nombre
 * @property $Rut
 * @property $FechaNacimiento
 * @property $Fono
 * @property $Email
 * @property $imagen
 * @property $created_at
 * @property $updated_at
 *
 * @property Receta $receta
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cliente extends Model
{
    
    static $rules = [
		'receta_id' => 'required',
		'nombre' => 'required',
		'Rut' => 'required',
		'FechaNacimiento' => 'required',
		'Email' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['receta_id','nombre','Rut','FechaNacimiento','Fono','Email','imagen'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function receta()
    {
        return $this->hasOne('App\Models\Receta', 'id', 'receta_id');
    }
    

}
