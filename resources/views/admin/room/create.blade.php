@extends('admin.master')
@section('content')
<div class="row">
   
    <div class="col-md-12">
            <form action="{{url('rooms')}}" method="POST">
                    @csrf 
                    <h3 class="text-success">Create Form</h3>
                    <div class="form-row">
                      <div class="col-md-6 mb-3">
                            <label for="room_type_id"><b>Room Type</b></label>
                            <select name="room_type_id" id="room_type_id" class="form-control @error('room_type') is-invalid @enderror">
                                    <option value="">Select Room Type</option>
                                
                                @foreach($room_types as $room_type)
                               
                                <option value="{{$room_type->id}}">{{$room_type->name}}</option>
                                @endforeach
                            </select>
                            @error('room_type')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                      </div>
                      <div class="col-md-6 mb-3">
                            <label for="number"><b>Number</b></label>
                                       
                            <input type="text" name="number" id="number" class="form-control  @error('number') is-invalid @enderror" placeholder="Enter your number" value="{{old('number')}}">
                            @error('number')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                      </div>
                      
                    </div>
                    <div class="form-row">
                      <div class="col-md-12 mb-3">
                            <label for="price"><b>Price</b></label>
                                       
                            <input type="text" name="price" id="price" class="form-control  @error('price') is-invalid @enderror" placeholder="Enter your price" value="{{old('price')}}">
                            @error('price')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                      </div>
                      
                    </div>
                    <div class="form-row">
                            <div class="col-md-6 mb-3">
                                    <label for="checkin"><b>Check in Date</b></label>
                                       
                                    <input type="date" name="checkin" id="checkin" class="form-control  @error('checkin') is-invalid @enderror" placeholder="Enter  checkin date" value="{{old('checkin')}}">
                                    @error('checkin')
                                    <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                    <label for="checkout"><b>Check Out Date</b></label>
                                       
                                    <input type="date" name="checkout" id="checkout" class="form-control  @error('checkout') is-invalid @enderror" placeholder="Enter checkout date" value="{{old('checkout')}}">
                                    @error('checkout')
                                    <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                            </div>
                            
                          </div>
                    
                          <button class="btn btn-success mb-3">Create</button>
                  </form>

            
    </div>
   
</div>


    @endsection