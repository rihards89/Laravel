<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Database\Factories\PostFactory;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'body',
        'author_name',
        ];

    protected static function newFactory(): PostFactory
    {
       return new PostFactory(); 
    }

    public function comments(): MorphMany
    {
        return $this->morphMany(Comment::class, 'commentable');
    }   
}
