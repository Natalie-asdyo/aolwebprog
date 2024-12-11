<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    protected $fillable = ['store_id', 'rating'];

    public function store()
    {
        return $this->belongsTo(User::class, 'store_id');
    }
}
