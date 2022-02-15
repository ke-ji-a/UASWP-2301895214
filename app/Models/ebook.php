<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ebook extends Model
{
    use HasFactory;
    public $primaryKey = 'ebook_id';

    public function order(){
        return $this->hasMany(Order::class, 'order_id', 'order_id');
    }

}
