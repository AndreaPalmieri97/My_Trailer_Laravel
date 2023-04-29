<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Trailer extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'genre',
        'img',
        'abstract',
        'year',
        'director',
        'url'
    ];

   public function user(){
    return $this->belongsTo(User::class);
   }
}
