<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * $fillable
     *
     * @var array
     */
    protected $fillable = ['comment'];
}
