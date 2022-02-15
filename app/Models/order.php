<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;

    public $primaryKey = 'order_id';

    public function ebook(){
        return $this->belongsTo(EBook::class, 'ebook_id', 'ebook_id');
    }

    public function account(){
        return $this->belongsTo(Account::class, 'account_id', 'account_id');
    }

}
