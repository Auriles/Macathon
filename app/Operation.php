<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    protected $fillable = ['serviceid', 'message','state','customer','contributorid','timestamp'];
    public $timestamps = false;



    protected $table = 'operation';
}
