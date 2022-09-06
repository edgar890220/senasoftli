<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Jugador
 *
 * @property $id
 * @property $nombre
 * @property $email
 * @property $created_at
 * @property $updated_at
 *
 * @property Partida[] $partidas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Jugador extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'email' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','email'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partidas()
    {
        return $this->hasMany('App\Models\Partida', 'id_jugador', 'id');
    }
    

}
