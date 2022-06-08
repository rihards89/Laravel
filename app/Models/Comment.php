<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Comment extends Model
{
    protected $fillable = [
        'author',
        'body',
        'commentable_id',
        'commentable_type',
    ];
    public function commentable(): MorphTo
    {
    return $this->morphTo();
    }
}
