<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PayMode extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'observation',
    ];

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }
}