@extends('admin.master')
@section('content')



<div class="container">
    <div class="row">
        @foreach($rooms as $room)
        <div class="col-md-3 room">
            <div class="card">{{$room->number}}</div>
        </div>
        @endforeach
        <div class="col-md-3">
                <div class="card" title="Add New Room">
                        <a href="{{url('rooms/create')}}"><i class="fa fa-plus-circle"></i></a>
                     </div>
        </div>
    </div> 
</div>
@endsection