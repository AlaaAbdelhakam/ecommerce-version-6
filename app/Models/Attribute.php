<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    // use HasFactory;
    use Translatable;

    protected $with = ['translations'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];


    /**
     * The attributes that are translatable.
     *
     * @var array
     */
    public $translatedAttributes = ['name'];


    public function options()
    {
        return $this->hasMany(Option::class, 'attribute_id');
    }
}
