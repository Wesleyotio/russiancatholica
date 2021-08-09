<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'name',
        'history',
        'link',
        'users_id',
        'images_id'
    ];

    public function user(){

        return $this->belongsTo(User::class);

    }
    public function image(){

        return $this->belongsTo(Image::class);

    }
}
