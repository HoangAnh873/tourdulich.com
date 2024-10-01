<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;

    protected $fillable = [
    ];

    
    protected $tables = 'bills';
    protected $primaryKey = 'id';

    public function orders(){
        return $this->hasMany(Order::class, 'bill_id','id');
    }
}
