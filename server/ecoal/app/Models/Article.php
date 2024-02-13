<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $guarded = [];



    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function tag(): HasMany
    {
        return $this->hasMany(Tag::class, 'id', 'tag_id');
    }
}
