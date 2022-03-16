@foreach($room_details as $list)
<option value="{{$list->room_id}}">{{$list->room_name}}</option>

@endforeach