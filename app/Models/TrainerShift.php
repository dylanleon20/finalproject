<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TrainerShift extends Model
{
    use HasFactory,SoftDeletes;
public function trainershift()
{
   return $this->belongsTo('App\Models\User','user_id','id');

}
 public function shiftname()
 {
     return $this->belongsTo('App\Models\Shift','shift_id','id');
     
 }

}
