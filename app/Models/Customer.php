<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Customer as Authenticatable;
// use Illuminate\Contracts\Auth\Authenticatable;

class Customer extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'sex',
        'password',
       
 ];

    
    protected $tables = 'customers';
    protected $primaryKey = 'id';

    public function getAuthIdentifier()
    {
        return $this->getKey(); // Trả về ID của người dùng
    }

    public function getAuthPassword()
    {
        return $this->password; // Trả về mật khẩu của người dùng
    }

    public function orders(){
        return $this->hasMany(Order::class, 'id_customer','id');
    }
}
