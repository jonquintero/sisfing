<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dependencies extends Model
{
    protected $table = "dependencies";

    protected $fillable = [
        'name',
    ];

    protected $dates = ['deleted_at'];
}
