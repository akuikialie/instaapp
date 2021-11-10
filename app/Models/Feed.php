<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feed extends Model
{
    use HasFactory;

    protected $fillable = [
        'body',
        'user_id',
        'published',
        'actived',
    ];

    protected $appends = ['comments', 'likes', 'user'];

    public function comments()
    {
        return $this->hasMany(FeedComment::class);
    }

    public function likes()
    {
        return $this->hasMany(FeedLike::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function (Feed $feed) {
            $feed->published = true;
            $feed->actived = true;
        });
    }
}
