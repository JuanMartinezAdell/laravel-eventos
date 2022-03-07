<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoriaEvento extends Model
{
    use HasFactory;

    //Relacion uno a muchos inversa
    public function evento()
    {
        return $this->BelongsTo(Evento::class);
    }
}
