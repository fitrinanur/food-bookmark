<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model
{
    use softDeletes;

    /**
     * $fillable
     *
     * @var array
     */
    protected $fillable = [
        'content',
        'price_start',
        'payment_method',
        'open_hours',
        'reservation',
        'halal_label',
        'halal_certified',
        'alcohol',
        'spicy_level'
    ];

    /**
     * food
     *
     * @return void
     */
    public function food()
    {
        return $this->belongsTo(Foods::class);
    
    }

    /**
     * user
     *
     * @return void
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * comments
     *
     * @return void
     */
    public function comments()
    {
        return $this->hasMany(Comments::class);
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
