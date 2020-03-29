<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $table = 'states';

    protected $primaryKey = 'id';

    //this state own many cities
    public function cities()
    {
        return $this->hasMany(City::class, 'state_id', 'id');
    }

    //this state belongsTo one country
    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id','id');
    }
}
