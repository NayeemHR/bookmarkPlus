<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'url',
        'type',
        'status',
        'notes',
    ];

    public function tag(string $name)
    {
        $tag = Tag::firstOrCreate(['name' => strtolower(trim($name))]);
        if (!$this->tags()->where('tag_id', $tag->id)->exists()) {
            $this->tags()->attach($tag);
        }

    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    // public function owner()
    // {
    //     return $this->belongsTo(Owner::class);
    // }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
