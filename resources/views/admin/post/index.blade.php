@extends('admin.master')
@section('content')

<a href="{{url('posts/create')}}"><button class="btn btn-info btn-sm "><i class="fa fa-plus-circle"></i> Add News</button></a><br><br><br>

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
    <th>Title</th>
    <th>Description</th>
    <th>Action</th>
    </tr>
</thead>
<tbody>
    @foreach($posts as $post)
    <tr>
        <td>{{$post->id}}</td>
        <td>{{$post->title}}</td>
        <td>{{$post->description}}</td>
        <td>
            <form action="{{url('posts/'.$post->id)}}" method="POST">
                    @csrf  
                    @method('DELETE')
           <a href="{{url('posts/'.$post->id.'/edit')}}"> <button type="button" class="btn btn-success btn-sm" ><i class="fa fa-edit"></i> Edit</button></a>
           <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete?')"><i class="fa fa-trash"></i> Delete</button>
        </form>
            
        </td>
    </tr>
    @endforeach
</tbody>

</table>
@endsection