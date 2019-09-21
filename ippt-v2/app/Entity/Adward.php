<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $title
 * @property string $author
 * @property string $short_text
 * @property string $photograph
 * @property string $text
 * @property string $img
 * @property string $data_add
 */
class Adward extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'adward';
    public $timestamps = false;

    /**
     * @var array
     */
    protected $fillable = ['title', 'author', 'short_text', 'photograph', 'text', 'img', 'data_add'];

}
