<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;
    protected $fillable = [
        "user_id",
        "post_id",
        "image",
        "video",
    ];
    protected static function booted()
    {
        static::creating(static function ($object) {
            $object->user_id = auth()->user()->id;
        });
    }
}
