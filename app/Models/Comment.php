<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'body',
        'post_id',
        'author_id'
    ];

    public function author() {
        return $this->belongsTo(User::class);
    }

    public function post() {
        return $this->belongsTo(BlogPost::class);
    }
}
