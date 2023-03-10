<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Movie extends Model
{
    use HasFactory;
    protected $fillable = ['genre_id','name','duration','director','box_office'];

    public function user() {
        return $this->belongsTo(User::class);
    }
    public function scopeBoxOffice($query)
    {
        return $query->where('box_office', 1);
    }
}
