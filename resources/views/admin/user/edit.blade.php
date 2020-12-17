@extends('admin.master')
@section('content')
<div class="row">
   
    <div class="col-md-12">

            <form action="{{url('users/'.$user->id)}}" method="POST">
                    @csrf 
                    @method('PUT')
                        <h3 class="text-success">Edit Form</h3>
                        <div class="form-group">
                            <label for="title"><b>Name</b></label>
                               
                            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter your name" value="{{$user-> name ?? old('name')}}">
                            @error('name')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="title"><b>Email</b></label>
                               
                            <input type="text" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter your email" value="{{$user -> email ?? old('email')}}">
                            @error('email')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="title"><b>Password</b></label>
                               
                            <input type="text" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter your password" value="{{$user->password ?? old('password')}}">
                            @error('password')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="title"><b>Role</b></label>
                               
                            <input type="text" name="role" id="role" class="form-control @error('role') is-invalid @enderror" placeholder="Enter your role" value="{{$user->role ?? old('role')}}">
                            @error('role')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
        
                                <button class="btn btn-success mb-3">Update</button>
            
                </form>
    </div>
    
</div>


    @endsection