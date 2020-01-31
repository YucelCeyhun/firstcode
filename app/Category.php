<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];

    public function contents(){
        return $this->hasMany(Content::class,'category_id');
    }
}
