<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory, Sluggable;
    
    // protected $fillable = ['title', 'excerpt', 'body'];
    protected $guarded = ['id'];
    protected $with = ['category', 'author']; // salah satu solusi n+1 problem dengan eager loading

    // method filtering by search keyword
    public function scopeFilter($query, array $filters) {
        // variabel $query mewakili setiap instance objek eloquent yang dilakukan filtering
        // "??" -> null coalescing operator; method when bekerja ketika arg1 true maka jalankan callback arg2
        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%')
                    ->orWhere('body', 'like', '%' . $search . '%');
        });
        
        $query->when($filters['category'] ?? false, function($query, $category) {
            return $query->whereHas('category', function($query) use ($category) {
                $query->where('slug', $category);
            });
        });

        $query->when($filters['author'] ?? false, function($query, $author) {
            return $query->whereHas('author', function($query) use ($author) {
                $query->where('username', $author);
            });
        });

        
    }

    // set foreign key dengan tabel category
    public function category() {
        return $this->belongsTo(Category::class);
    }

    // set foreign key dengan tabel user
    public function author() {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
