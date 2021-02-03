<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libros extends Model
{
    protected $table = 'libros';

    public function editorial(){
        return $this->belongsTo(Editorial::class,'editorial','id');
    }
}
