<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    use HasFactory;

    protected $gaurded = [];
    protected $appends = [
        'chef'
    ];
    protected $casts = [
        'toppings' => 'array',
    ];


    protected $hidden = [
        'user'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getChefAttribute()
    {
        return $this->user->name;
    }
}
