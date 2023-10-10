<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Opcine; // or Opcine, based on the correct model name

class Isplate extends Model
{
    use HasFactory;
    protected $table = 'isplate';

    public function opcine() {
        
    return $this->belongsTo(Opcine::class, 'rkpid', 'rkpid');
}

}
