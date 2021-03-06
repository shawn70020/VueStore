<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false;
    protected $guarded = ['id'];
    protected $fillable = ['name', 'sex', 'class', 'price','content','detail','image','enable','date'];
}
