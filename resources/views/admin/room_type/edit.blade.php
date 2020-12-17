@extends('admin.master')
@section('content')
<div class="row">
    
    <div class="col-md-12">

            <form action="{{url('room_types/'.$room_type->id)}}" method="POST">
                    @csrf 
                    @method('PUT')
                        <h3 class="text-success">Edit Form</h3>
                        <div class="form-group">
                                <label for="name"><b>Name</b></label>
                                   
                                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter your name" value="{{$room_type->name ?? old('name')}}">
                                @error('name')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
            
                            
                                <button class="btn btn-success mb-3">Update</button>
            
                </form>
    </div>
    
</div>


    @endsection