<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    public $table='user_details';
    protected $fillable=[
        'user_id','phone','phone2','address','address2'
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
