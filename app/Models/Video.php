<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    protected $fillabole=['title', 'path', 'video_id'];

    public function user(){
        return $this->hasMany(User::class);
    }
}
