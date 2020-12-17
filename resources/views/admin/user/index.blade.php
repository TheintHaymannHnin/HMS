@extends('admin.master')
@section('content')

<a href="{{url('users/create')}}"><button class="btn btn-info btn-sm "><i class="fa fa-plus-circle"></i> Add News</button></a>

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
    <th>Email</th>
    <th>Password</th>
    <th>Role</th>
    <th>Action</th>
    </tr>
</thead>
<tbody>
    @foreach($users as $user)
    <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->password}}</td>
        <td>{{$user->role}}</td>
        <td>
            <form action="{{url('users/'.$user->id)}}" method="POST">
                    @csrf  
                    @method('DELETE')
           <a href="{{url('users/'.$user->id.'/edit')}}"> <button type="button" class="btn btn-success btn-sm" ><i class="fa fa-edit"></i> Edit</button></a>
           <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete?')"><i class="fa fa-trash"></i> Delete</button>
        </form>
            
        </td>
    </tr>
    @endforeach
</tbody>

</table>
@endsection











