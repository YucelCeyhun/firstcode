<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = [];
    private $size = 64;

    public function gravatar()
    {
        return "https://www.gravatar.com/avatar/" . md5(strtolower(trim($this->email))) .
            "?d=" . urlencode($this->getDefaultAvatar()) .
            "&s=" . $this->size;
    }

    public function content()
    {
        return $this->belongsTo(Content::class, 'content_slug', 'slug');
    }

    public function contentWithCommentId(){
        return $this->content->slug.'/#comment-'.$this->id;
    }

    public function commentId(){
        return 'comment-'.$this->id;
    }

    private function getDefaultAvatar()
    {
        return asset('images/default.png',true);
    }
}
