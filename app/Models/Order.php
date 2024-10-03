<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [

    ];

    
    protected $tables = 'oders';
    protected $primaryKey = 'id';

    public function tours(){
        return $this->belongsTo(Tour::class, 'tour_id', 'id');
    }

    public function customers(){
        return $this->hasMany(Customer::class, 'order_id','id');
    }

}
