<?php

namespace App\Models;
use App\Models\User;
use App\Models\Transaction_detail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        "customer_name",
        "total",
       
    ];
    public function transaction_detail()
    {
        return $this->hasMany(Transaction_detail::class);
    }
}

