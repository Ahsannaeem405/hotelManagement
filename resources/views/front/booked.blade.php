
@extends('front.layout.header')
@section('content')
            
          <!-- section booked rooms start -->
          <div class="container mt-4">
            <section class="booked-rooms p-4">
               <div class="row">
                   <div class="col-12">
                       <h2>Booked Rooms</h2>
                   </div>
               </div>
               <div class="row">
                   @foreach($BookingRoom as $list)
                   @if(isset($list->RoomBookUser) && count($list->RoomBookUser) > 0)

                   @foreach($list->RoomBookUser as $list1)
                <div class="col-12">
                    <div class="booked-rooms-card mt-4">
                        <div class="row">
                            <div class="col-lg-3 col-md-5 ">
                                <div class="card-img p-2 p-md-0">
                                    <img src="{{asset('rooms')}}/{{$list1->RoomBookDetails->room_image}}" alt="room-img" class="">
                                    <div class="card-img-text">
                                        <p class="mb-0">{{$list1->RoomBookDetails->corridor_name}}</p>
                                        <p class="mb-0">{{$list1->RoomBookDetails->room_name}}</p>
                                        <p class="mb-0">{{$list1->RoomBookDetails->room_size}}</p>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-lg-9 col-md-7">
                                <div class="my-card-body p-2 p-lg-3 pb-4 pb-md-2 pb-md-0">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-12 mt-lg-2 mt-0">
                                            <div class="form-group mb-0 mb-md-2 mb-lg-3">
                                                <label >Booking Start Time</label>
                                                <input type="text" readonly value="{{date('h:i A',strtotime($list1->start_time))}}" class="form-control" >
                                              </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12 mt-lg-2 mt-0">
                                            <div class="form-group mb-0 mb-md-2 mb-lg-3">
                                                <label>Booking End Time</label>
                                                <input type="text" readonly  value="{{date('h:i A',strtotime($list1->end_time))}}" class="form-control">
                                              </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12 mt-lg-2 mt-0">
                                            <div class="form-group mb-0 mb-md-2 mb-lg-3">
                                                <label >Numbers of People</label>
                                                <input type="number" readonly  value="{{$list1->no_people}}" class="form-control">
                                              </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12 mt-lg-2 mt-0">
                                            <div class="form-group mb-0 mb-md-2 mb-lg-3">
                                                <label >Booked by</label>
                                                <input type="text" readonly  value="{{$list->name}}" class="form-control">
                                              </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12 mt-lg-2 mt-0">
                                            <div class="form-group mb-0 mb-md-2 mb-lg-3">
                                                <label >Special Equipment</label>
                                                <input type="text" readonly  value="{{$list1->special_equip}}" class="form-control">
                                              </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12 mt-lg-2 mt-0">
                                            <div class="form-group mb-0 mb-md-2 mb-lg-3">
                                                <label >Start Date</label>
                                                <input type="text" readonly  value="{{$list1->start_date}}" class="form-control">
                                              </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                    @else
                    <div class="col-12">
                        <div class="booked-rooms-card mt-4">
                            <div class="row justify-content-center">
                                <h6 class="py-4">Booking not available!</h6>
                            </div>
                        </div>
                    </div>                                

                    @endif
                @endforeach
                
            </div>
                
            </section>
          </div>
  @endsection