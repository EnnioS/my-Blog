<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function roles(){//Relacion ManyToMany
        return $this->belongsToMany(Rol::class,'usuarios_roles','usuarios_id', 'roles_id');//relacion con clase Rol mediante tabla puete usuarios roles
    }
}
