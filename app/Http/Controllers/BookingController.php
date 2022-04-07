<?php

namespace App\Http\Controllers;

use App\Models\BookingRoom;
use App\Models\RoomDetails;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Collection;

class BookingController extends Controller
{
    public function index()
    {
        $room_details['room_details']=RoomDetails::get();
        return view('front.index',$room_details);
    }
    public function booked()
    {
   
        $BookingRoom['BookingRoom']=User::where('id',Auth::user()->id)->get();
        return view('front/booked',$BookingRoom);
    }
    public function booking()
    {
        $room_details['room_details']=RoomDetails::where('corridor_id', 1)->get();
        return view('front.booking',$room_details);
    }

    public function getRoom(Request $request)
    {
        $corridor_id=$request->corridor_id;
        $room_details['room_details']=RoomDetails::where('corridor_id', $corridor_id)->get();
        return view('front.select_Croom',$room_details);
    }

    public function roomBooing(Request $request)
    {
       
                $request->validate([
                    'name' => 'required',
                    'no_people' => 'required',
                    'email' => 'required',
                    'corridor_id' => 'required',
                    'room_id' => 'required',
                    'start_date' => 'required',
                    'start_time' => 'required|date_format:H:i',
                    'end_time' => 'required|date_format:H:i|after:start_time',
                  
                ]);

            
       
                    $check_Book=BookingRoom::whereDate('start_date', '=',$request->start_date)
                    ->where('corridor_id',$request->corridor_id )
                    ->where('room_id',$request->room_id )
                    ->where('room_comp_time', '>', $request->start_time )
                    ->orderBy('id','DESC')->first();
                      
                     if($check_Book == null)
                    {
                        $newDateTime = Carbon::parse($request->end_time)->addHours(1);
                        $endFinshTime=date('G:i',strtotime( $newDateTime));
                      
                        $roomBook=new BookingRoom();
                        $roomBook->user_id=Auth::user()->id;
                        $roomBook->corridor_id=$request->corridor_id;
                        $roomBook->room_id=$request->room_id;
                        $roomBook->name=$request->name;
                        $roomBook->no_people=$request->no_people;
                        $roomBook->email=$request->email;
                        $roomBook->start_date=$request->start_date;
                        $roomBook->start_time=$request->start_time;
                        $roomBook->end_time=$request->end_time;
                        $roomBook->room_comp_time=$endFinshTime;
                        $roomBook->special_equip=$request->special_equip;
                        $roomBook->save();
                        //mail code after booking room
                        $details = [
                            'title' => 'Mail from ItSolutionStuff.com',
                            'body' => 'This is for testing email using smtp'
                        ];
                       
                        \Mail::to(Auth::user()->email)->send(new \App\Mail\BookingMail($details));
                       
                      
                        return redirect()->back()->with('success','Booking successfully submitted!');
                     }else{
                        return redirect()->back()->with('error',' This Room is already booked for this date and time please choose another room or Date time.');
                         }
  
   
    }


    public function search_room(Request $request)
    {

    if($request->corridor != '' && $request->size_room != '')
    {
        
          $corridor=$request->corridor;
          $size_room=$request->size_room;
  
        $room_details['room_details']=RoomDetails::whereIn('room_size', $size_room)
        ->whereIn('corridor_id', $corridor)
        ->get();
       

    }elseif($request->size_room != ''){
        $size_room=$request->size_room;
        $room_details['room_details']=RoomDetails::whereIn('room_size', $size_room) ->get();
    }elseif($request->corridor != '')
    {
        $corridor=$request->corridor;
        $room_details['room_details']=RoomDetails::whereIn('corridor_id', $corridor)->get();
    }else{
        $room_details['room_details']=RoomDetails::get();
        return view('front.index',$room_details);
    }
    return view('front.index',$room_details);
        
}


public function CheckRoom(Request $request)
{
 
    $check_BookRoom=BookingRoom::where('corridor_id',$request->corridorId )
    ->whereTime('end_time','>',$request->start_time)
    ->whereDate('start_date', '=',$request->start_date)
    ->orderBy('id','DESC')
    ->first();
    if($check_BookRoom != null)
    {
                $currentRoom= $check_BookRoom->room_id;
               
                $firstRoom=$currentRoom - 1;
                $lastRoom=$currentRoom + 1;
               
              
                if( $request->roomId ==  $firstRoom)
                {
                    return response()->json(['status'=>'FirstRoom']);

                }else if($request->roomId == $lastRoom)
                {
                    return response()->json(['status'=>'LastRoom']);

                }else if($request->roomId == $currentRoom)
                {
                  
                    return response()->json(['status'=>'Already']);

                }
              
               

    }
  
}
}
