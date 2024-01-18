<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wilayah extends Model
{
    public function jemaats(){
        return $this->hasMany(Jemaats::class);
    }
}
