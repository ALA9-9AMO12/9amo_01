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
        return 'titel';
    }
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'artikel';
    protected $fillable = [
        'artikelID ', 'titel', 'content', 'afbeelding'
    ];
    /**
     * Handle dynamic method calls into the model.
     *
     * @param  string  $method
     * @param  array  $parameters
     * @return mixed
     */
    public function __call($method, $parameters)
    {
        if (in_array($method, ['increment', 'decrement'])) {
            return $this->$method(...$parameters);
        }

        if ($resolver = (static::$relationResolvers[get_class($this)][$method] ?? null)) {
            return $resolver($this);
        }

        return $this->forwardCallTo($this->newQuery(), $method, $parameters);
    }
}
