<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
        'tags',
        'user_id',
        'image'
    ];

    // un post peut avoir plusieurs commentaires
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    // un post n'appartien qu'à un seul user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
