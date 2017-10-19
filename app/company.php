<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    protected $table = "companies";
    protected $primaryKey = "id";
    public $timestamps = true;
}
