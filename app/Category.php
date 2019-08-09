<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\GameType;
use Cviebrock\EloquentSluggable\Sluggable;


class Category extends Model
{
    public function game_types() 
    {
    	return $this->hasMany('App\GameType', 'id_category', 'id');
    }
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
                'source' => 'name'
            ]
        ];
    }
}
