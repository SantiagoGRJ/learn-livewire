<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumn extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'number'
    ];


    public static function search($query)
    {
        return Alumn::whereLike('name',"%{$query}%")
        ->orWhereLike('number',"%{$query}%")
        ->paginate(5);
    }

}
