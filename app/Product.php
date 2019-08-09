<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use App\Image;
use App\GameType;

class Product extends Model
{
    protected $fillable = [
        'name',
        'id_gametype',
        'price',
        'description',
        'unit',
        'avatar',
    ];

    // protected $guarded = ['id'];

    public function game_type()
    {
    	return $this->belongsTo('App\GameType', 'id_gametype', 'id');
    }

    // public function rates()
    // {
    //     return $this->hasMany('App\Rate', 'id_product', 'id');
    // }

    public function images()
    {
        return $this->hasMany('App\Image', 'id_product', 'id');
    }
    // public function warehouses()
    // {
    //     return $this->hasMany('App\Warehouse', 'id_product', 'id');
    // }
    // public function comments()
    // {
    //     return $this->hasMany('App\Comment', 'id_product', 'id');
    // }
    public function getImage($id)
    {
        $image = Image::where('id_product', $id)->first();

        return $image;
    }
    // public function getDate($id)
    // {
    //     $date = Warehouse::where('id_product', $id)->orderBy('created_at', 'DESC')->first();

    //     return $date;
    // }

    public function getAllImage($id)
    {
        $image = Image::where('id_product', $id)->get();

        return $image;
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
