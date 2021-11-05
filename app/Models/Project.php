<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable=[
        'image',
        'name',
        'live_link',
        'source_link',
        'details'
    ];
}
