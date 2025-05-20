<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'customer_id',
        'date',
        'pay_mode_id',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function payMode()
    {
        return $this->belongsTo(PayMode::class);
    }

    public function details()
    {
        return $this->hasMany(Detail::class);
    }
}