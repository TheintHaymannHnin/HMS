<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Room_type;


class ShowroomController extends Controller
{
    public function showroom()
    {
        $rooms=Room::all();
        $room_types=Room_type::all();
        
        return view('admin.room.showroom',compact('rooms','room_types'));
    }
}
