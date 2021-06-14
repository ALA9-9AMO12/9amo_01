<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'artikel';
    protected $fillable = [
        'artikelID ', 'titel', 'content', 'afbeelding'
    ];
}
