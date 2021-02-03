@if(!empty($attendence_data))
    @foreach($attendence_data as $value)
        <tr>
            <td>{{$loop->iteration}} </td>

            <td> {{ $value->first_name }}</td>
            <td> {{ $value->last_name }}</td>
            <td> {{ $value->total }}</td>
        </tr>
    @endforeach
@endif
