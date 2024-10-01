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

    public function bills(){
        return $this->belongsTo(Bill::class, 'bill_id', 'id');
    }

}
