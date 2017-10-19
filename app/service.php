<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    protected $table = "services";
    protected $primaryKey = "id";
    public $timestamps = true;

    public function serviceCategories(){
        return $this->belongsTo(serviceCategory::class,'category_id','id');
    }
}
