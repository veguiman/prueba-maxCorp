<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $table = 'estudiantes';
    
      public function usuario()
    {
        return $this->hasMany(User::class, 'estudiante_id');
    }
    
      public function materia()
    {
        return $this->hasMany(Materia::class, 'estudiante_id');
    }
    
    
}
