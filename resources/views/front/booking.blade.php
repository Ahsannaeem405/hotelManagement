
@php
    // $url=$_SERVER['REQUEST_URI'];
    if(isset($_GET['corridor_id']) )
    {
        $corridor= $_GET['corridor_id'];
         $room= $_GET['room_id'];
         $room_id= $_GET['room'];
    }
   
    // dd( $room);
@endphp
@extends('front.layout.header')
@section('content')
             
          <!-- Booking section start -->
            <div class="container book-container">
                <div class="row">
                    <div class="col-12">
                        <div class="book-now mt-5 p-4">
                            <div class="row">
                                <div class="col-12">
                                        <h2>Booked Rooms</h2>
                                </div>
                            </div>
                            @if ($message = Session::get('success'))
                            <div class="alert alert-success ">    
                                <strong>{{ $message }}</strong>
                            </div>
                            @endif
                            @if ($message = Session::get('error'))
                            <div class="alert alert-danger ">    
                                <strong>{{ $message }}</strong>
                            </div>
                            @endif
                            <form action="{{url('roomBooing')}}" method="POST">
                                @csrf
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-12 mt-0 mt-md-2">
                                    <div class="form-group text-center">
                                        <label >Full Name</label>
                                        <input type="text" name="name" value="{{Auth::user()->name}}" class="form-control @error('name') is-invalid @enderror">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror    
                                      </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12 mt-0 mt-md-2">
                                    <div class="form-group text-center">
                                        <label >Email</label>
                                        <input type="email" name="email" value="{{Auth::user()->email}}" class="form-control  @error('email') is-invalid @enderror">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror    
                                      </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12 mt-0 mt-md-2">
                                    <div class="form-group text-center">
                                        <label >How many people?</label>
                                        <input type="number" min="1" max="10" name="no_people" class="form-control  @error('no_people') is-invalid @enderror">
                                        @error('no_people')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror    
                                      </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12 mt-0 mt-md-2">
                                    <div class="form-group text-center">
                                        <label >Corridor</label>
                                        <select class="form-control  @error('corridor_id') is-invalid @enderror" @if(isset($corridor)) disabled @endif  name="corridor_id" id="inputGroupSelect01">
                                           
                                            <option value="1" @if(isset($corridor)) @if( $corridor == 1) selected   @endif @endif >Corridor 1</option>
                                            <option value="2" @if(isset($corridor)) @if( $corridor == 2) selected   @endif @endif>Corridor 2</option>
                                            <option value="3" @if(isset($corridor))  @if( $corridor == 3) selected   @endif @endif>Corridor 3</option>
                                        </select>
                                        @if(isset($room)) 
                                        <input type="hidden" value="{{$corridor}}" name="corridor_id">
                                        @endif
                                        @error('corridor_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror    
                                      </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12 mt-0 mt-md-2">
                                    <div class="form-group text-center">
                                        <label>Room</label>
                                            <select class="custom-select room form-control  @error('room_id') is-invalid @enderror" @if(isset($room)) disabled @endif name="room_id" id="inputGroupSelect01">
                                                @foreach($room_details as $list)
                                                <option value="{{$list->id }}"  @if(isset($room))  @if( $room == $list->id) selected  @endif @endif >{{$list->room_name}}</option>
                                               
                                                @endforeach
                                            </select>
                                            @if(isset($room)) 
                                            <input type="hidden" value="{{$room_id}}" name="room_id">
                                            @endif
                                            @error('room_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror    
                                      </div>
                                </div>
                            
                                <div class="col-lg-4 col-md-6 col-12 mt-0 mt-md-2">
                                    <div class="form-group text-center">
                                        <label >Start Date</label>
                                        <input type="date" name="start_date" min="<?php echo date("Y-m-d"); ?>" class="form-control  @error('start_date') is-invalid @enderror">
                                        @error('start_date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror    
                                      </div>
                                </div>
                            
                             
                                <div class="col-lg-4 col-md-6 col-12 mt-0 mt-md-2">
                                    <div class="form-group text-center">
                                        <label >Booking Start Time</label>
                                        <input type="time" name="start_time"   class="form-control  @error('start_time') is-invalid @enderror">
                                        @error('start_time')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror    
                                      </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12 mt-0 mt-md-2">
                                    <div class="form-group text-center">
                                        <label >Booking End Time</label>
                                        <input type="time" name="end_time"  class="form-control  @error('end_time') is-invalid @enderror">
                                        @error('end_time')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror    
                                      </div>
                                </div>
                              
                                <div class="col-lg-4 col-md-6 col-12 mt-0 mt-md-2">
                                    <div class="form-group text-center">
                                        <label >Special Equipment</label>
                                        <input type="text" name="special_equip" class="form-control  @error('special_equip') is-invalid @enderror">
                                        @error('special_equip')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror    
                                      </div>
                                </div>
                               
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-lg-4 col-md-6 col-10  mt-4">
                                    <button class="w-100 book-btn py-1">Book</button>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
          
  @endsection

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script>
      $(document).ready(function(){

          
          $('#corridor').on('change',function(){
                var cId = $(this).val();

               $.ajax({
                  url: '{{URL::to('/getRoom')}}',
                  type: 'get',
                  data: {
                      'corridor_id': cId,
                    },
                  success: function (data) {
                  
                     $('.room').empty().append(data);
                  }
              });
          });
      });
  </script>
  <script>
      $(function(){
    var dtToday = new Date();
    
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();
    
    var minDate= year + '-' + month + '-' + day;
    
    $('#txtDate').attr('min', minDate);
  </script>
  