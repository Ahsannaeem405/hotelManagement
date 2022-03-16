<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingRoom extends Model
{
    use HasFactory;

    public function RoomBookDetails()
{
    return $this->belongsTo('App\Models\RoomDetails', 'room_id','id');
}

}

