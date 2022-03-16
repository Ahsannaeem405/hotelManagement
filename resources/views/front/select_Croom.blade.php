@foreach($room_details as $list)
<option value="{{$list->id}}">{{$list->room_name}}</option>

@endforeach