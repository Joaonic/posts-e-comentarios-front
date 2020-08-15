<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $fillable = [
        "email",
        "title",
        "name",
        "content"
    ];

    public function comments() {
        return $this->hasMany("App\Comment");
    }
}
