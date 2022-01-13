<?php

namespace App\Models;

use App\Models\Room;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hotel extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['user', 'rooms'];

    public function scopeFilter($query, array $filters)
    {
        if (isset($filters['search']) ? $filters['search'] : false) {
            return $query->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('address', 'like', '%' . request('search') . '%');
        }
    }
    public function rooms()
    {
        return $this->hasMany(Room::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function Book()
    {
        return $this->hasMany(Book::class);
    }
}
