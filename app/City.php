<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'cities';

    protected $primaryKey = 'id';

    //this city belongsTo one country
    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id', 'id');
    }

    //this city belongsTo one state
    public function state()
    {
        return $this->belongsTo(State::class, 'state_id', 'id');
    }
}
