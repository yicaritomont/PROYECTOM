<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InspectionType extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
