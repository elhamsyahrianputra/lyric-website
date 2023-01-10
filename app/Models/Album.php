<?php

namespace App\Models;

use App\Models\Song;
use App\Models\Artist;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Album extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [
        'id',
    ];


    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }

    public function song()
    {
        return $this->hasMany(Song::class);
    }
}
