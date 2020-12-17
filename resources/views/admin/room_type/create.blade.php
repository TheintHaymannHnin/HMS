@extends('admin.master')
@section('content')
<div class="row">
    
    <div class="col-md-12">

            <form action="{{url('room_types')}}" method="POST">
                    @csrf 
                        <h3 class="text-success">Create Form</h3>
                        <div class="form-group">
                                <label for="name"><b>Name</b></label>
                                   
                                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter your name" value="{{old('name')}}">
                                @error('name')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
            
                           
                                <button class="btn btn-success mb-3">Create</button>
            
                </form>
    </div>
    
</div>


    @endsection