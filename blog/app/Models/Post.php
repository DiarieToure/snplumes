<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Category;
use App\Models\Comment;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'sub-content',
        'content',
        'sub_content',
        'user_id',
        'category_id',
        'image',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
