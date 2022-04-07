@php
// $url=$_SERVER['REQUEST_URI'];
if (isset($_GET['corridor_id'])) {
    $corridor = $_GET['corridor_id'];
    $room = $_GET['room_id'];
    $room_id = $_GET['room'];
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
                    {{-- @if ($message = Session::get('success'))
                        <div class="alert alert-success ">
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif --}}
                    {{-- @if ($message = Session::get('error'))
                        <div class="alert alert-danger ">
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif --}}
                    <form action="{{ url('roomBooing') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12 mt-0 mt-md-2">
                                <div class="form-group text-center">
                                    <label>Full Name</label>
                                    <input type="text" name="name" value="{{ Auth::user()->name }}"
                                        class="form-control @error('name') is-invalid @enderror">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12 mt-0 mt-md-2">
                                <div class="form-group text-center">
                                    <label>Email</label>
                                    <input type="email" name="email" value="{{ Auth::user()->email }}"
                                        class="form-control  @error('email') is-invalid @enderror">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12 mt-0 mt-md-2">
                                <div class="form-group text-center">
                                    <label>How many people?</label>
                                    <input type="number" min="1" max="10" name="no_people"
                                        class="form-control  @error('no_people') is-invalid @enderror">
                                    @error('no_people')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12 mt-0 mt-md-2">
                                <div class="form-group text-center">
                                    <label>Corridor</label>
                                    <select class="form-control corridor_id @error('corridor_id') is-invalid @enderror"
                                        @if (isset($corridor)) disabled @endif name="corridor_id"
                                        id="inputGroupSelect01">

                                        <option value="1"
                                            @if (isset($corridor)) @if ($corridor == 1) selected @endif
                                            @endif >Corridor 1</option>
                                        <option value="2"
                                            @if (isset($corridor)) @if ($corridor == 2) selected @endif
                                            @endif>Corridor 2</option>
                                        <option value="3"
                                            @if (isset($corridor)) @if ($corridor == 3) selected @endif
                                            @endif>Corridor 3</option>
                                    </select>
                                    @if (isset($room))
                                        <input type="hidden" value="{{ $corridor }}" name="corridor_id">
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
                                    <select class="custom-select room form-control room_id  @error('room_id') is-invalid @enderror"
                                        @if (isset($room)) disabled @endif name="room_id"
                                        id="inputGroupSelect01">
                                        @foreach ($room_details as $list)
                                            <option value="{{ $list->id }}"
                                                @if (isset($room)) @if ($room == $list->id) selected @endif
                                                @endif >{{ $list->room_name }}</option>
                                        @endforeach
                                    </select>
                                    @if (isset($room))
                                        <input type="hidden" value="{{ $room_id }}" name="room_id">
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
                                    <label>Start Date</label>
                                    <input type="date" name="start_date" min="<?php echo date('Y-m-d'); ?>"
                                        class="form-control  start_date @error('start_date') is-invalid @enderror" value="<?php echo date('Y-m-d'); ?>">
                                    @error('start_date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="col-lg-4 col-md-6 col-12 mt-0 mt-md-2">
                                <div class="form-group text-center">
                                    <label>Booking Start Time</label>
                                    <input type="time" name="start_time"
                                        class="form-control start_time  @error('start_time') is-invalid @enderror"  value="<?php echo date('h:i'); ?>">
                                    @error('start_time')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12 mt-0 mt-md-2">
                                <div class="form-group text-center">
                                    <label>Booking End Time</label>
                                    <input type="time" name="end_time"
                                        class="form-control  @error('end_time') is-invalid @enderror">
                                    @error('end_time')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-12 mt-0 mt-md-2">
                                <div class="form-group text-center">
                                    <label>Special Equipment</label>
                                    <input type="text" name="special_equip"
                                        class="form-control  @error('special_equip') is-invalid @enderror">
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
    <!-- Button trigger modal -->
    {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
    Launch demo modal
  </button> --}}

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-danger" id="exampleModalLongTitle">Unsuccessfully Booking.</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="text-dark">
                        Booking unsuccessful due to another booking taking place at the same time in the
                        nearby room, please try to book another room.
                    </p>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="already" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-danger" id="exampleModalLongTitle">Already Booking.</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="text-dark">
                    This Room is already booked for this date and time please choose another room or Date time.
                </p>
            </div>

        </div>
    </div>
</div>



    <div class="modal fade" id="successCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-success" id="exampleModalLongTitle">Successfully Booking</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="text-dark">
                        Room booked successfully, please adhere to covid restriction guidelines in place.
                        Masks are mandatory whilst moving around the building, please use the provided hand sanitiser to
                        clean your hands and try to remain at 2m distance to each other where possible.
                        More on covid guidelines can be found on at:<a
                            href="https://www.gov.scot/coronavirus-covid-19/">https://www.gov.scot/coronavirus-covid-19/</a>
                        Please, where possible maintain distance between other groups of people and do not mix with other
                        groups.
                    </p>
                </div>

            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <script>
            $(document).ready(function() {
                $('#successCenter').modal('show');
            });
        </script>
    @endif
    @if ($message = Session::get('LastRoom'))
        <script>
            $(document).ready(function() {
                $('#exampleModalCenter').modal('show');
            });
        </script>
    @endif
    @if ($message = Session::get('error'))
        <script>
            $(document).ready(function() {
                $('#already').modal('show');
            });
        </script>
    @endif
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    $(document).ready(function() {

        $('.start_date').on('change',function(){
            var roomId = $('room_id').val();
            var corridorId = $('.corridor_id').val();
            var start_date = $(this).val();
            var start_time = $('.start_time').val();
            $.ajax({
                url: '{{ URL::to('/CheckRoom') }}',
                type: 'get',
                data: {
                    'roomId': roomId,
                    'corridorId': corridorId,
                    'start_date': start_date,
                    'start_time': start_time,
                },
                success: function(data) {
                    if(data.status == 'Already')
                    {
                        
                        $('#already').modal('show');
                    }
                    if(data.status == 'FirstRoom' || data.status == 'LastRoom')
                    {
                        $('.book-btn').hide();
                        $('#exampleModalCenter').modal('show');

                    }else{
                        $('.book-btn').show();
                    }
                  
                    //$('.room').empty().append(data);
                }
                
                 
            });
        });

        $('.room_id').on('change',function(){
            var roomId = $(this).val();
            var corridorId = $('.corridor_id').val();
            var start_date = $('.start_date').val();
            var start_time = $('.start_time').val();
            $.ajax({
                url: '{{ URL::to('/CheckRoom') }}',
                type: 'get',
                data: {
                    'roomId': roomId,
                    'corridorId': corridorId,
                    'start_date': start_date,
                    'start_time': start_time,
                },
                success: function(data) {
                    if(data.status == 'Already')
                    {
                        
                        $('#already').modal('show');
                    }
                    if(data.status == 'FirstRoom' || data.status == 'LastRoom')
                    {
                        $('.book-btn').hide();
                        $('#exampleModalCenter').modal('show');

                    }else{
                        $('.book-btn').show();
                    }
                  
                    //$('.room').empty().append(data);
                }
                
                 
            });
        });
        $('.start_time').on('change',function(){
            var roomId = $('.room_id').val();
            var corridorId = $('.corridor_id').val();
            var start_date = $('.start_date').val();
            var start_time = $(this).val();
            $.ajax({
                url: '{{ URL::to('/CheckRoom') }}',
                type: 'get',
                data: {
                    'roomId': roomId,
                    'corridorId': corridorId,
                    'start_date': start_date,
                    'start_time': start_time,
                },
                success: function(data) {
                 
                    if(data.status == 'FirstRoom' || data.status == 'LastRoom')
                    {
                        $('.book-btn').hide();
                        $('#exampleModalCenter').modal('show');

                    }else{
                        $('.book-btn').show();
                    }
                    if(data.status == 'Already')
                    {
                        
                        $('#Already').modal('show');
                    }
                 
                    //$('.room').empty().append(data);
                }
            });
        });

        
        $('#corridor').on('change', function() {
            var cId = $(this).val();

            $.ajax({
                url: '{{ URL::to('/getRoom') }}',
                type: 'get',
                data: {
                    'corridor_id': cId,
                },
                success: function(data) {

                    $('.room').empty().append(data);
                }
            });
        });
    });
</script>
<script>
    $(function() {
                var dtToday = new Date();

                var month = dtToday.getMonth() + 1;
                var day = dtToday.getDate();
                var year = dtToday.getFullYear();
                if (month < 10)
                    month = '0' + month.toString();
                if (day < 10)
                    day = '0' + day.toString();

                var minDate = year + '-' + month + '-' + day;

                $('#txtDate').attr('min', minDate);
</script>
