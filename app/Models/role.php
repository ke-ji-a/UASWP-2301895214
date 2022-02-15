<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    use HasFactory;
    public $primaryKey = 'role_id';

    public function account(){
        return $this->hasMany(account::class, 'account_id', 'account_id');
    }

}
