<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberShift extends Model
{
    use HasFactory;

    public function member_name()
    {
        return $this->belongsTo(User::class, 'user_id','id');

    }

 public function shiftname()
 {
    return $this->belongsTo(Shift::class,'shift_id','id');
 }

}
