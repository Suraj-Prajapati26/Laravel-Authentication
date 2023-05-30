<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallet_trans extends Model
{
    use HasFactory;
    protected $table = 'wallet_trans';
    

    public function user()
    {
        return $this->belongsTo(UserModel::class,'userid');
    }
}
