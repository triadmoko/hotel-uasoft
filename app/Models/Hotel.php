<?php

namespace App\Models;

use App\Models\Room;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hotel extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function rooms()
    {
        return $this->hasMany(Room::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
