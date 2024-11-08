<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Photo extends Model
{
    use HasFactory;

    protected $fillable =[
        'title',
        'photo'
    ];

    public static function search($query)
    {
        return Photo::whereLike('title',"%{$query}%")
               ->paginate(2);

    }

    public static function getPhotoUrl($filename)
    {
        return Storage::url('photos/'.$filename);
    }
}
