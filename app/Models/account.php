<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class account extends Model
{
    use HasFactory;
    protected $hidden = [
        'name', 'email', 'password',
    ];

    public function order(){
        return $this->hasMany(Order::class, 'order_id', 'order_id');
    }

    public function role(){
        return $this->belongsTo(Role::class, 'role_id', 'role_id');
    }

    public function gender(){
        return $this->belongsTo(Gender::class, 'gender_id', 'gender_id');
    }
}
