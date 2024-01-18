<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengurus extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'id_pengurus';
    protected $table = 'penguruss';
    protected $guarded = [];
}
