<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Article;

class Ordered extends Model
{
    use HasFactory;
    public function user(){
    	return $this->belongsTo(User::class, 'user_id');
    }
    public function article(){
    	return $this->belongsTo(Article::class, 'article_id');
    }
}
