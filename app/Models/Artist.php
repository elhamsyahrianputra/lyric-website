<?php

namespace App\Models;

use App\Models\Song;
use App\Models\Album;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Artist extends Model
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


    public function song()
    {
        return $this->hasMany(Song::class);
    }

    public function album()
    {
        return $this->hasMany(Album::class);
    }
}
