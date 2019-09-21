<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $title
 * @property string $author
 * @property string $short_text
 * @property string $photograph
 * @property int $type_of_new
 * @property string $text
 * @property string $img
 * @property string $data_add
 */
class News extends Model
{
    /**
     * @var array
     */
    public $timestamps = false;
    protected $fillable = ['title', 'author', 'short_text', 'photograph', 'type_of_new', 'text', 'img', 'data_add'];
    protected $primaryKey = 'id';

}
