<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
      protected $table = 'profesores';
      
      
       public function usuario()
    {
        return $this->hasMany(User::class, 'profesor_id');
    }
    
      public function materia()
    {
        return $this->hasMany(Materia::class, 'profesor_id');
    }
}
