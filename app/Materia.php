<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    protected $table = 'materias';
    
      public function estudiante()
    {
        return $this->belongsTo(Estudiante::class, 'estudiante_id');
    }
    
      public function profesor()
    {
        return $this->belongsTo(Profesor::class, 'profesor_id');
    }
}
