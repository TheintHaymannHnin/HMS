@extends('admin.master')
@section('content')

<a href="{{url('room_types/create')}}"><button class="btn btn-info btn-sm "><i class="fa fa-plus-circle"></i> Add News</button></a><br><br>

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
    <th>Name</th>
    <th>Action</th>
    </tr>
</thead>
<tbody>
    @foreach($room_types as $room_type)
    <tr>
        <td>{{$room_type->id}}</td>
        <td>{{$room_type->name}}</td>
        
        <td>
            <form action="{{url('room_types/'.$room_type->id)}}" method="POST">
                    @csrf  
                    @method('DELETE')
           <a href="{{url('room_types/'.$room_type->id.'/edit')}}"> <button type="button" class="btn btn-success btn-sm" ><i class="fa fa-edit"></i> Edit</button></a>
           <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete?')"><i class="fa fa-trash"></i> Delete</button>
        </form>
            
        </td>
    </tr>
    @endforeach
</tbody>

</table>
@endsection