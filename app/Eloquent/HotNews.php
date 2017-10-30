<?php

namespace App\Eloquent;

use Illuminate\Database\Eloquent\Model;

class HotNews extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'desc', 'image_url'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $attributes = [
        'delete' => 'N',
    ];
}
