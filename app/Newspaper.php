<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newspaper extends Model
{
    protected $fillable = [
	    'title',
        'content',
        'avatar',
    ];

     use Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
