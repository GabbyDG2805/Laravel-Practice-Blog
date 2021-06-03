<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['body'];

    public function post()
    {
        return $this->belogsTo(Post::class);
    }

    public function user()
    {
        return $this->belogsTo(User::class);
    }
}
