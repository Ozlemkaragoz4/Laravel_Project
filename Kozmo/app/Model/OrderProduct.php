<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
  public $table='order_product';
  protected $fillable=[
      'order_details_id','product_id'
  ];

  public function order_details()
  {
      return $this->belongsTo(OrderDetails::class,'order_detail_id');
  }
  public function product()
  {
      return $this->hasMany(Product::class,'product_id');
  }
}
