<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
        'tags',
        'user_id',
        'post_id',
        'image'
    ];

    // un post n'appartien qu'à un seul user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
