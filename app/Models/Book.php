<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Book extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'PageCount', 'author_id'];

    public function author(){
        return $this->belongsTo(Author::class);
    }
}
