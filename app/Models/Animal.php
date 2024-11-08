<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'quantity'
    ];

    public static function search($query)
    {
        return Animal::whereLike('name',"%{$query}%")
               ->orWhereLike('quantity',"%{$query}%")
               ->paginate(10);
    }
}
