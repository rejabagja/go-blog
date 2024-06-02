<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'excerpt', 'body'];
    protected $guarded = ['id'];

    // set foreign key dengan tabel category
    public function category() {
        return $this->belongsTo(Category::class);
    }

    // set foreign key dengan tabel user
    public function user() {
        return $this->belongsTo(User::class);
    }
}
