<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = "comments";
    public $timestamps = false;

    protected $fillable = [
        'username', 
        'email', 
        'message'
    ];  

    protected $casts = [
        'approved' => 'boolean'
    ];

    public function article(){
        return $this->belongsTo(Article::class);
    }
}
