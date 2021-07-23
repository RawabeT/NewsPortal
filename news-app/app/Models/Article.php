<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $table = "articles";
    public $timestamps = false;

    protected $fillable = [
        'author_name', 
        'date_of_publish', 
        'title',
        'description',
        'category'
    ];  

    public function user(){
        return $this->belongsTo(User::class);
    }
}
