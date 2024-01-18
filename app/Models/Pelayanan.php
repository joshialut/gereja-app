<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelayanan extends Model
{
    public function jemaat(){
        return $this->belongsToMany(Jemaat::class,'jemaats_pelayanans');
    }
    protected $primaryKey = 'id_pelayanan';
    protected $table = 'pelayanans';
    protected $guarded = [];
}
