<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded = ['created_at','updated_at'];
    protected $dates = [
        'published_at'
    ];
    protected $fillable = ['title','slug','image','description','user_id','category_id','published_date'];

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function user(){
       return $this->belongsTo(User::class);
    }
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}
