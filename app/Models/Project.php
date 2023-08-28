<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $table = "projects";
    // protected $fillable =['name','deskripsi','foto'];
    protected $primaryKey = "id";
    protected $guarded = [''];
    protected $keyType = "string";
}
