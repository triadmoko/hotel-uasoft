<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }
    public function book()
    {
        return $this->hasMany(Book::class);
    }
    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
