<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
// use App\Traits\QueryScopes;

class Language extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'canonical',
        'publish',
        'user_id',
        'image',
    ];

    protected $table = 'languages';

}