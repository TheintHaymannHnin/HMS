@extends('admin.master')
@section('content')
<div class="row">
   
    <div class="col-md-12">

            <form action="{{url('users')}}" method="POST">
                    @csrf 
                        <h3 class="text-success">Create Form</h3>
                        <div class="form-group">
                                <label for="title"><b>Name</b></label>
                                   
                                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter your name" value="{{old('name')}}">
                                @error('name')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="title"><b>Email</b></label>
                                   
                                <input type="text" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter your email" value="{{old('email')}}">
                                @error('email')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="title"><b>Password</b></label>
                                   
                                <input type="text" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter your password" value="{{old('password')}}">
                                @error('password')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="title"><b>Role</b></label>
                                   
                                <input type="text" name="role" id="role" class="form-control @error('role') is-invalid @enderror" placeholder="Enter your role" value="{{old('role')}}">
                                @error('role')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
            
                           
                                <button class="btn btn-success mb-3">Create</button>
            
                </form>
    </div>
    
</div>


    @endsection