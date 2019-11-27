<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $table="product";

    protected $fillable=[
        'title','category_id','content','discount','image','price'
    ];
    public function category()
    {
        return $this->belongsTo(UpCategory::class,'category_id');
    }


}
