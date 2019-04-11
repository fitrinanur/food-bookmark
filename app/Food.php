<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Food extends Model
{
    use softDeletes;
    /**
     * $fillable
     *
     * @var array
     */
    protected $fillable = ['name','description','latitude','longitude','picture_default_id','category_id'];

    /**
     * category
     *
     * @return void
     */
    public function category()
    {
        return $this->belongsTo(CategoryFood::class);
    }

    /**
     * picture
     *
     * @return void
     */
    public function picture()
    {
        return $this->morphOne(Picture::class, 'pictureable');
    }
}
