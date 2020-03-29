<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'countries';

    protected $primaryKey = 'id';

    //this Country own  many cities
    public function cities()
    {
        return $this->hasMany(City::class, 'country_id', 'id');
    }

    //this Country own  many states
    public function states()
    {
        return $this->hasMany(State::class, 'country_id', 'id');
    }
}
