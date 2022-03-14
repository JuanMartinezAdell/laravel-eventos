<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    //Relacion  uno a muchos
    public function posts()
    {
        return $this->hasMany(categoriaEvento::class);
    }

    //Relacion uno a muchos inversa
    public function inscripcion()
    {
        return $this->BelongsTo(Inscripcion::class);
    }

    //Relacion muchos a muchos
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
