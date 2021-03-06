<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $table = 'offers';
    protected $fillable = ['name', 'price', 'details'];
    protected $hidden = ['updates_at', 'created_at'];
    public $timestamps = false;

}
