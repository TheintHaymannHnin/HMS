<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $guarded=['room_type'];

    public function room_type()
    {
        return $this->belongsTo('App\Models\Room_type','room_type_id');
    }
}
