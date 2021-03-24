<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Beer extends Model
{
    protected $fillable = ['name', 'alcohol_content', 'description', 'price', 'img_url', 'origin'];
}
