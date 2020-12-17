@extends('admin.master')
@section('content')

<a href="{{url('rooms/create')}}"><button class="btn btn-info btn-sm float-right "><i class="fa fa-plus-circle"></i> Add News</button></a>
@if(Session('successAlert'))
<div class="alert alert-success alert-dismissible show fade">
    <strong>{{Session('successAlert')}}</strong>
    <button class="close" data-dismiss="alert">&times;</button>
</div>
@endif
<table class="table table-bordered table-hover">
     <thead>
    <tr>
    <th>ID</th>
    <th>Room Type </th>
    <th>Number</th>
    <th>Price</th>
    <th>Check in</th>
    <th>Check out</th>
    <th>Action</th>
    </tr>
</thead>
<tbody>
    @foreach($rooms as $room)
    <tr>
            
        <td>{{$room->id}}</td>
        <td>{{$room->room_type->name}}</td>
        <td>{{$room->number}}</td>
        <td>{{$room->price}}</td>
        <td>{{$room->checkin}}</td>
        <td>{{$room->checkout}}</td>
        <td>
            <form action="{{url('rooms/'.$room->id)}}" method="POST">
                    @csrf  
                    @method('DELETE')
           <a href="{{url('rooms/'.$room->id.'/edit')}}"> <button type="button" class="btn btn-success btn-sm" ><i class="fa fa-edit"></i> Edit</button></a>
           <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete?')"><i class="fa fa-trash"></i> Delete</button>
        </form>
            
        </td>
    </tr>
    @endforeach
</tbody>

</table>
@endsection