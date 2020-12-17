@extends('admin.master')
@section('content')
<div class="row">
    
    <div class="col-md-12">

            <form action="{{url('posts')}}" method="POST">
                    @csrf 
                        <h3 class="text-success">Create Form</h3>
                        <div class="form-group">
                                <label for="title"><b>Title</b></label>
                                   
                                <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Enter your title" value="{{old('title')}}">
                                @error('title')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
            
                            <div class="form-group">
                                    <label for="description"><b>Description</b></label>
                                       
                                    <input type="text" name="description" id="description" class="form-control  @error('description') is-invalid @enderror" placeholder="Enter your description" value="{{old('description')}}">
                                    @error('description')
                                    <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                                <button class="btn btn-success mb-3">Create</button>
            
                </form>
    </div>
   
</div>


    @endsection