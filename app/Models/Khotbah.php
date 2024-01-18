<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Khotbah extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'id_khotbah';
    protected $table = 'khotbahs';
    protected $guarded = [];
}
