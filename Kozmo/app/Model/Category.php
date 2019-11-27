<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $table="category";

    protected $fillable=[
      'title','up_category_id'
    ];

    public function up_category()
    {
        return $this->belongsTo(UpCategory::class,'up_category_id');

    }
    public function product()
    {
      return $this->hasMany(Product::class,'category_id');
    }


}
