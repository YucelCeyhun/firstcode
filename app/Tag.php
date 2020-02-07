<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $guarded = [];

    public function getRouteKeyName(){
        return 'slug';
    }

    public function contents(){
        return $this->belongsToMany(Content::class,'tag_content')->withTimestamps();
    }
}
