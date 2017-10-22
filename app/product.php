<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'product_name', 'unit_price', 'image_url', 'created_at', 'updated_at'];
    public $timestamps = true;
}
