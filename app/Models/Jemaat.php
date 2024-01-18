<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jemaat extends Model
{
    public function wilayah(){
        return $this->belongsTo('App\Wilayah');
    }
    public function pelayanan(){
        return $this->belongsToMany(Pelayanan::class,'jemaats_pelayanans');

    }
    public $timestamps = false;
    protected $primaryKey = 'id_jemaat';
    protected $table = 'jemaats';
    protected $guarded = [];
    protected $fillable = ['jenis_pelayanan'];
}
