<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $tabla ='countries';

    protected $fillable=[
        'country_code',
        'country_name',
    ];
}
