<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'birth_date'
    ];

    protected $casts = [
        'birth_date' => 'date',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function scopeOrderByName($query)
    {
        return $query->orderBy('name');
    }
}
