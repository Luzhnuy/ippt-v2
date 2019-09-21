<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 */
class Iproject extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'iproject';
    public $timestamps = false;

    /**
     * @var array
     */
    protected $fillable = [];

}
