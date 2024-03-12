<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    // protected $fillable = ['name', 'year', 'details', 'added_by', 'category', 'image', 'user_id'];
    protected $fillable = ['name', 'year', 'details', 'user_id', 'category', 'image', 'trending', 'is_4k', 'upcoming', 'suggest', 'name', 'email', 'password', 'rate'];


// Movie.php (or your model file)


    public function user() 
    {
        return $this -> belongsTo(User::class);
    }
}
