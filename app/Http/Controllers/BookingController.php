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
        // $BookingRoom['BookingRoom']=RoomDetails::get();
        //  dd($BookingRoom['BookingRoom'][0]->RoomBookUser);
        //  dd($BookingRoom['BookingRoom'][0]->RoomBookDetails);
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
        // dd($room_details['room_details']);
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
    'start_time' => 'required',
    'end_time' => 'required',
    'special_equip' => 'required',
]);
// $newDateTime = Carbon::parse($request->start_time)->addHours(1);
             
// dd($newDateTime,$request->start_time);
// die();
    $check_Book=BookingRoom::whereDate('start_date', '=',$request->start_date)
    ->where('corridor_id',$request->corridor_id )
    ->where('room_id',$request->room_id )
    ->where('room_comp_time', '>', $request->start_time )
    ->orderBy('id','DESC')->first();
     //dd($check_Book);
    
//     $newDateTime = Carbon::parse($check_Book->end_time)->addHours(1);
//     // $check_Book=BookingRoom::where('end_time', '>', $request->start_time )
//     // ->orderBy('start_date','DESC')->first();     
//    // dd($request->start_time > $newDateTime);
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

        
        return redirect()->back()->with('success','Booking successfully submited!');

    }else{
        // dd(2);
        return redirect()->back()->with('error','Already this corridor room booked , please try another corridor room booking!');

    }
    }


    public function search_room(Request $request)
    {
       
        if($request->corridor != '' || $request->size_room != '')
    {
        if( $request->corridor != '')
        {
          $corridor=$request->corridor;
        }else{
            $corridor=[];   
        }
        if($request->size_room != '')
        {
          $size_room=$request->size_room;
        }else{
            $size_room=[];
        }
        $search['query']=RoomDetails::whereIn('room_size', $size_room)
        ->whereIn('corridor_id', $corridor)
        ->get();
    }else{
        $search['query']=RoomDetails::get();
    }
        return view('front/searchRoom',$search);
        
}



}
