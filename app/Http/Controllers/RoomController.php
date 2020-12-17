<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Room_type;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms=Room::all();
        $room_types=Room_type::all();
        
        return view('admin.room.index',compact('rooms','room_types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {    
        $room_types=Room_type::all();
        return view('admin.room.create',compact('room_types'))->with('successAlert','You have successfully created');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'room_type_id'=>'required',
            'number'=>'required',
            'price'=>'required',
            'checkin'=>'required',

            'checkout'=>'required'


        ]);
        Room::create([
            'room_type_id'=>$request->room_type_id,
            'number'=>$request->number,
            'price'=>$request->price,
            'checkin'=>$request->checkin,
            'checkout'=>$request->checkout

        ]);
        return redirect('rooms');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $room=Room::find($id);
          
        $room_types=Room_type::all();
        return view('admin.room.edit',compact('room','room_types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'room_type_id'=>'required',
            'number'=>'required',
            'price'=>'required',
            'checkin'=>'required',

            'checkout'=>'required'

        ]);
        Room::find($id)->update([
            'room_type_id'=>$request->room_type_id,
            'number'=>$request->number,
            'price'=>$request->price,
            'checkin'=>$request->checkin,
            'checkout'=>$request->checkout

        ]);
        return redirect('rooms')->with('successAlert','You have successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Room::find($id)->delete();
        return redirect('/rooms')->with('successAlert','You have successfully deleted');
    }

    
}
