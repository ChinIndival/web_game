<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use App\Product;
use App\Category;

class GameType extends Model
{
    protected $fillable = [
        'name',
        'id_category',
        'avatar',
        'description'
    ];

    public function products()
    {
        return $this->hasMany('App\Product', 'id_gametype', 'id');
    }

    public function category()
    {
        return $this->belongsTo('App\Category', 'id_category', 'id');
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
