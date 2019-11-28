<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'Tareas';

    protected $fillable = ['fecha', 'nombre', 'direccion', 'latitud', 'longitud', 'mercancia', 'estado', 'distribuidor'];

    protected $guarded = ['_id'];

    // One To One
    public function distributor()
    {
        return $this->hasOne(Distributor::class);
    }
}
