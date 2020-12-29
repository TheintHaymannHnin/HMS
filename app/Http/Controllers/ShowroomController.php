<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Room_type;


class ShowroomController extends Controller
{
    public function showroom()
    {
        
        $room_types=Room_type::all();
        // return $room_types;
        return view('admin.room.showroom',compact('room_types'));
    }
    public function roomDetailsApi($roomId)
    {
        $room=Room::with('room_type')->findOrFail($roomId);
        return $room;
    }
}
