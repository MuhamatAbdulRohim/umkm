<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class serviceCategory extends Model
{
    protected $table = "service_categories";
    protected $primaryKey = "id";
    public $timestamps = true;

    public function service()
    {
        return $this->hasMany(service::class,'category_id','id');
    }
}
