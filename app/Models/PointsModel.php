<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PointsModel extends Model
{
    protected $table = 'points';
    //otomatis
    protected $guarded = ['id'];
    
}
