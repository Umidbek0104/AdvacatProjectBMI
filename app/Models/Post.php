<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable=[
        'title',
        'short_description',
        'body',
        'file_url',

    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
