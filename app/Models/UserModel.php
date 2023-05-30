<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;
    protected $table = 'user';
    protected $primaryKey = 'userid';

    public function wallet_trans()
    {
        return $this->hasMany(Wallet_trans::class,'userid');
    }
}
