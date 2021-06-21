<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $primarykey = 'id';
    //jika tidak mau memasukkan timestamp
    public $timestamps = false;
    protected $fillable = ['name'];
}
