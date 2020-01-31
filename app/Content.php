<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }

    public function tags(){
        return $this->belongsToMany(Tag::class,'tag_content')->withTimestamps();
    }

    public function comments(){
        return $this->hasMany(Comment::class,'content_slug','slug')->latest('updated_at');
    }
}
