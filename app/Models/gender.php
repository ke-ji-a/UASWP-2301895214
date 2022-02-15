<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gender extends Model
{
    use HasFactory;
    public $primaryKey = 'gender_id';

    public function account(){
        return $this->hasMany(Account::class, 'account_id', 'account_id');
    }

}
