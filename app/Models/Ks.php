<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ks extends Model
{
    use HasFactory;
    protected $table = "Ks";
    protected $primaryKey = "id";
    protected $guarded = [''];
    protected $keyType = "string";
}
