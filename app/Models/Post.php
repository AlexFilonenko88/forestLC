<?php

namespace App\Models;

use App\Http\Filters\PostFilter;
use App\Models\Traits\HasFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasFilter;

//    public function comments()
//    {
//        return $this->hasMany(Comment::class);
//    }


    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }

//    public function likedByProfiles()
//    {
//        return $this->belongsToMany(Profile::class, 'post_profile_likes', 'post_id', 'profile_id');
//    }

    public function likedProfiles()
    {
        return $this->morphedByMany(Profile::class, 'likeable');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }


}
