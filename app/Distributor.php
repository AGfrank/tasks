<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distributor extends Model
{
    protected $table = 'Distribuidor';

    protected $fillable = ['login', 'email', 'password'];

    protected $guarded = ['_id'];

    // One To Many
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
