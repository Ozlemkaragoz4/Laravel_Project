<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UpCategory extends Model
{
    public $table="up_category";

    protected $fillable=[
        'title'
    ];
}
