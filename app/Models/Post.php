<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author'
    ];

    public static function search($query)
    {
        return Post::whereLike('title',"%{$query}%")
        ->orWhereLike('author',"%{$query}%")
        ->paginate(10);
    }
}
