<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    protected $table = "animals";

    protected $fillable = [
        'id',
        'kind',
        'name',
        'age',
        'description',
        'img',
        'created_at',
        'updated_at',
    ];
}
