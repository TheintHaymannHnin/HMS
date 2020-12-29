<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room_type extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function rooms()
    {
        return $this->hasMany('App\Models\Room');
    }

    public function room()
    {
        return $this->belongsTo('App\Models\Room','room_type_id');
    }
    
}
