<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $degree
 * @property int $direction
 * @property int $course
 * @property int $requiredfile
 * @property string $pdf_rozklad
 */
class Rozklad extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'rozklad';
    public $timestamps = false;

    /**
     * @var array
     */
    protected $fillable = ['degree', 'direction', 'course', 'requiredfile', 'pdf_rozklad'];

}
