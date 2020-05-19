<?php

namespace App;
ini_set('display_errors', 1);

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable = [
        'song_name', 'artist_name', 'song_url', 'artist_url', 'genre', 'price', 'song_image_url'
    ];
    public function getAllPosts($orderBy = ['id', 'DESC'])
    {
        return Song::orderBy($orderBy[0], $orderBy[1])->get()->all();
    }

    public function createPost(array $formData)
    {
        return Song::create($formData);
    }
}
