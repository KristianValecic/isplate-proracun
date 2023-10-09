<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Isplate extends Model
{
    use HasFactory;
    protected $table = 'isplate';

    public function opcine() {
    return $this->belongsTo(Opcine::class, 'rkpid', 'rkpid');
}

}
