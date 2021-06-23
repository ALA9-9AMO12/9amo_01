<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    /**
     * Return the name of the attribute by which the article is retrieved from the parameter of the route.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'artikelID';
    }
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'artikelen';
    protected $fillable = [
        'artikelID',
        'titel',
        'content'
//        'afbeelding',
    ];
}
