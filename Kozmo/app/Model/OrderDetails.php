<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    public $table="order_details";

    protected $fillable=[
        'order_id'
    ];

    public function order()
    {
        return $this->belongsTo(Order::class,'order_id');
    }
}
