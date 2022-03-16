<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // $created_at=date();
        // $updated_at=date();

        DB::table('room_details')->insert([
            ['room_id' => "1",'corridor_id' => "1",'room_name'=>'Room 1','corridor_name'=>'Corridor 1','room_size'=>'large','room_image'=>'room_1.jpg'],
            ['room_id' => "2",'corridor_id' => "1",'room_name'=>'Room 2','corridor_name'=>'Corridor 1','room_size'=>'large','room_image'=>'room_2.jpg'],
            ['room_id' => "3",'corridor_id' => "1",'room_name'=>'Room 3','corridor_name'=>'Corridor 1','room_size'=>'large','room_image'=>'room_3.jpg'],
            ['room_id' => "4",'corridor_id' => "1",'room_name'=>'Room 4','corridor_name'=>'Corridor 1','room_size'=>'medium','room_image'=>'room_4.jpg'],
            ['room_id' => "5",'corridor_id' => "1",'room_name'=>'Room 5','corridor_name'=>'Corridor 1','room_size'=>'medium','room_image'=>'room_5.jpg'],
            ['room_id' => "6",'corridor_id' => "1",'room_name'=>'Room 6','corridor_name'=>'Corridor 1','room_size'=>'medium','room_image'=>'room_6.jpg'],
            ['room_id' => "7",'corridor_id' => "1",'room_name'=>'Room 7','corridor_name'=>'Corridor 1','room_size'=>'small','room_image'=>'room_7.jpg'],
            ['room_id' => "8",'corridor_id' => "1",'room_name'=>'Room 8','corridor_name'=>'Corridor 1','room_size'=>'small','room_image'=>'room_8.jpg'],
            ['room_id' => "9",'corridor_id' => "1",'room_name'=>'Room 9','corridor_name'=>'Corridor 1','room_size'=>'small','room_image'=>'room_9.jpg'],

            ['room_id' => "1",'corridor_id' => "2",'room_name'=>'Room 1','corridor_name'=>'Corridor 2','room_size'=>'large','room_image'=>'room_1.jpg'],
            ['room_id' => "2",'corridor_id' => "2",'room_name'=>'Room 2','corridor_name'=>'Corridor 2','room_size'=>'large','room_image'=>'room_2.jpg'],
            ['room_id' => "3",'corridor_id' => "2",'room_name'=>'Room 3','corridor_name'=>'Corridor 2','room_size'=>'large','room_image'=>'room_3.jpg'],
            ['room_id' => "4",'corridor_id' => "2",'room_name'=>'Room 4','corridor_name'=>'Corridor 2','room_size'=>'medium','room_image'=>'room_4.jpg'],
            ['room_id' => "5",'corridor_id' => "2",'room_name'=>'Room 5','corridor_name'=>'Corridor 2','room_size'=>'medium','room_image'=>'room_5.jpg'],
            ['room_id' => "6",'corridor_id' => "2",'room_name'=>'Room 6','corridor_name'=>'Corridor 2','room_size'=>'medium','room_image'=>'room_6.jpg'],
            ['room_id' => "7",'corridor_id' => "2",'room_name'=>'Room 7','corridor_name'=>'Corridor 2','room_size'=>'small','room_image'=>'room_7.jpg'],
            ['room_id' => "8",'corridor_id' => "2",'room_name'=>'Room 8','corridor_name'=>'Corridor 2','room_size'=>'small','room_image'=>'room_8.jpg'],
            ['room_id' => "9",'corridor_id' => "2",'room_name'=>'Room 9','corridor_name'=>'Corridor 2','room_size'=>'small','room_image'=>'room_9.jpg'],

            
            ['room_id' => "1",'corridor_id' => "3",'room_name'=>'Room 1','corridor_name'=>'Corridor 3','room_size'=>'large','room_image'=>'room_1.jpg'],
            ['room_id' => "2",'corridor_id' => "3",'room_name'=>'Room 2','corridor_name'=>'Corridor 3','room_size'=>'large','room_image'=>'room_2.jpg'],
            ['room_id' => "3",'corridor_id' => "3",'room_name'=>'Room 3','corridor_name'=>'Corridor 3','room_size'=>'large','room_image'=>'room_3.jpg'],
            ['room_id' => "4",'corridor_id' => "3",'room_name'=>'Room 4','corridor_name'=>'Corridor 3','room_size'=>'medium','room_image'=>'room_4.jpg'],
            ['room_id' => "5",'corridor_id' => "3",'room_name'=>'Room 5','corridor_name'=>'Corridor 3','room_size'=>'medium','room_image'=>'room_5.jpg'],
            ['room_id' => "6",'corridor_id' => "3",'room_name'=>'Room 6','corridor_name'=>'Corridor 3','room_size'=>'medium','room_image'=>'room_6.jpg'],
            ['room_id' => "7",'corridor_id' => "3",'room_name'=>'Room 7','corridor_name'=>'Corridor 3','room_size'=>'small','room_image'=>'room_7.jpg'],
            ['room_id' => "8",'corridor_id' => "3",'room_name'=>'Room 8','corridor_name'=>'Corridor 3','room_size'=>'small','room_image'=>'room_8.jpg'],
            ['room_id' => "9",'corridor_id' => "3",'room_name'=>'Room 9','corridor_name'=>'Corridor 3','room_size'=>'small','room_image'=>'room_9.jpg']
        ]);
    }
}
