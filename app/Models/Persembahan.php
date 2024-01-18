<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persembahan extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'id_persembahan';
    protected $table = 'persembahans';
    protected $guarded = [];
}
