<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $img
 */
class Slider extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'slider';
    public $timestamps = false;

    /**
     * @var array
     */
    protected $fillable = ['img'];

}
