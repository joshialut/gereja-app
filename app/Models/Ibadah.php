<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ibadah extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'id_ibadah';
    protected $table = 'ibadahs';
    protected $guarded = [];
}
