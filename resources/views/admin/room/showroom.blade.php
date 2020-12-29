@extends('admin.master')
@section('content')
<div class="container">
    <div class="row">
        <!-- Modal -->
        <div class="modal fade" id="roomModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Room Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                            <ul class="list-group">
                                <li class="list-group-item">Room Type : <span id="roomType">
                                </span></li>
                                <li class="list-group-item">Room No. :<span id="roomNo"></span></li>
                                <li class="list-group-item">Price :<span id="roomPrice"></span>    </li>
                            </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            @foreach($room_types  as $room_type)
            <button type="button" class="btn btn-dark btn-sm btn-block">{{$room_type->name}}</button>
            @foreach($room_type->rooms as $room)
            <div class="col-md-3 room" data-toggle="modal" data-target="#roomModal" title="View Room Details" style="cursor: pointer" onclick="showdetailmodal({{$room->id}});">
            <div class="card">{{$room->number}}/{{$room->id}}</div>
            </div>
            @endforeach
            
            @endforeach
            
        </div>
        </div> 
    </div>
    @endsection 
    @section('js')
    <script>
           function showdetailmodal(roomId)
           {
            fetch('room-details-api/'+roomId)
               .then(response => response.json())
               .then(function(room){
                console.table(room);
                document.getElementById('roomType').innerHTML=room.room_type.name;
                document.getElementById('roomNo').innerHTML=room.number;
                document.getElementById('roomPrice').innerHTML=room.price;
               });
           }
    </script>
        
    @endsection