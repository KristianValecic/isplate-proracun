<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opcine extends Model
{
    use HasFactory;

    protected $table = 'opcine';
    
    public function isplate() {
        return $this->hasMany(Isplate::class, 'rkpid', 'rkpid');
    }

}
