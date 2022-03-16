
@extends('front.layout.header')
@section('content')
               <!-- section booked rooms start -->
               <div class="container">
                <section class="booked-rooms mt-5 p-4">
    
                    <!-- Filter section start -->
                   <div class="row">
                       <div class="col-12">
                           <div class="booking-filter px-5 py-4">
                               <div class="row justify-content-center align-items-center">
                                <div class="col-lg-9 col-12 ">
                                    <form action="{{url("search_room")}}" method="POST">
                                        @csrf
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-12 mb-2 ">
                                            <div class="form-check">
                                                <input type="checkbox" name="size_room1" id="small" value="small" class="form-check-input">
                                                <label class="form-check-label" >Small Room</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-12 mb-2">
                                            <div class="form-check">
                                                <input type="checkbox" name="size_room2"  id="medium" value="medium" class="form-check-input">
                                                <label class="form-check-label" >Medium Room</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-12 mb-2">
                                            <div class="form-check">
                                                <input type="checkbox" name="size_room3" id="large" value="large" class="form-check-input">
                                                <label class="form-check-label" >large Room</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-12 mb-2">
                                            <div class="form-check">
                                                <input type="checkbox" name="corridor1" id="corridor1" value="1" class="form-check-input">
                                                <label class="form-check-label" >Corridor 1</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-12 mb-2">
                                            <div class="form-check">
                                                <input type="checkbox" name="corridor2" id="corridor2" value="2" class="form-check-input">
                                                <label class="form-check-label" >Corridor 2</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-12 mb-2">
                                            <div class="form-check">
                                                <input type="checkbox" name="corridor3" id="corridor3" value="3" class="form-check-input">
                                                <label class="form-check-label" >Corridor 3</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-12 col-12 p-0">
                                    <button type="submit" id="Search" class="search-btn w-100 py-2">Search</button>
                                </div>
                               </div>
                            </form>
                           </div>
                       </div>
                   </div>
                   <!-- Filter section end -->
                   @if ($message = Session::get('error'))
                   <div class="alert alert-danger mt-3">    
                       <strong class="text-center">{{ $message }}</strong>
                   </div>
                   @endif
                    <!-- Book Room Card start -->
                    <div class="row">
                      
                        @foreach($room_details as $list)
                        <div class="col-md-6 col-12 mt-5">
                            <div class="bookNow-card">
                                <div class="row align-items-center ">
                                    <div class="col-lg-6 col-md-12 col-12">
                                            <div class="card-room-img">
                                                <img src="{{asset('rooms')}}/{{$list->room_image}}" alt="room-img" class="">
                                                <div class="room-details">
                                                    <p class="mb-0">{{$list->corridor_name}}</p>
                                                    <p class="mb-0">{{$list->room_name}}</p>
                                                    <p class="mb-0">{{$list->room_size}}</p>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12 text-center py-5">
                                        <a href="booking?corridor_id={{$list->corridor_id}}&room_id={{$list->room_id}}" class="btn book-btn my-5 w-75">Book</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                            <!-- Large modal -->
{{-- 
<div class="modal fade bd-example-modal-lg{{$list->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">New message</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="container book-container">
                <div class="row">
                    <div class="col-12">
                        <div class="book-now mt-5 p-4">
                            <div class="row">
                                <div class="col-12">
                                        <h2>Booked Rooms</h2>
                                </div>
                            </div>
                            <div class="row">
                            
                                <div class="col-lg-4 col-md-6 col-12 mt-0 mt-md-2">
                                    <div class="form-group text-center">
                                        <label >Date</label>
                                        <input type="date" class="form-control">
                                      </div>
                                </div>
                            
                            
                                <div class="col-lg-4 col-md-6 col-12 mt-0 mt-md-2">
                                    <div class="form-group text-center">
                                        <label >Booking Start Time</label>
                                        <input type="time" class="form-control">
                                      </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12 mt-0 mt-md-2">
                                    <div class="form-group text-center">
                                        <label >How many people?</label>
                                        <input type="number" class="form-control">
                                      </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12 mt-0 mt-md-2">
                                    <div class="form-group text-center">
                                        <label >Special Equipment</label>
                                        <input type="text" class="form-control">
                                      </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12 mt-0 mt-md-2">
                                    <div class="form-group text-center">
                                        <label >Booking End Time</label>
                                        <input type="time" class="form-control">
                                      </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-lg-4 col-md-6 col-10  mt-4">
                                    <button class="w-100 book-btn py-1">Book</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
     
    </div>
  </div>
</div> --}}

                        @endforeach
                        
                    </div>
                    <!-- Book Room Card end -->
                </section>
              </div>
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

              {{-- <script>
                  $(document).ready(function(){
                      $('#Search').click(function(){
                        //   var small=$('#small').val();
                        //   var medium=$('#medium').val();
                        //   var large=$('#large').val();
                          $('input:checkbox[name=size_room]:checked').each(function() 
                            {

                                $('input:checkbox[name=corridor]:checked').each(function() 
                            {

                            });
                            alert($(this).val());
                            });
                      });
                  });
              </script> --}}
  @endsection