<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    protected $fillable = [
        'client_id',
        'first_name',
        'middle_name',
        'last_name',
        'phone',
        'email',
        'passport';
        'iata_country_code'       
    ];


}
