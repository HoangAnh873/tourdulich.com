<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tour extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'name',
        'description',
        'start_date',
        'end_date',
        'price',
        'publish',
    ];

    
    protected $tables = 'tours';
    protected $primaryKey = 'id';

    public function orders(){
        return $this->hasMany(Order::class, 'bill_id','id');
    }
}
