<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Inscripcion extends Model
{
    use HasFactory;

    //Relacion  uno a muchos
    public function posts()
    {
        return $this->hasMany(Evento::class);
    }

    //Relacion uno a muchos inversa
    public function user()
    {
        return $this->BelongsTo(User::class);
    }
}
