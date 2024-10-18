<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'tour_id',
        'id_customer',
        'order_date',
        'quantity',
    ];

    
    protected $tables = 'orders';
    protected $primaryKey = 'id';

    public function tours(){
        return $this->belongsTo(Tour::class, 'tour_id', 'id');
    }

    public function customers(){
        return $this->belongsTo(Customer::class, 'id_customer', 'id');
    }


}
