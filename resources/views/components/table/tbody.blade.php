{{-- Anonymous components --}}
<tbody>
    @foreach ($datas as $data)
        <tr>
            <th scope="row"> {{ $data->id }} </th>
            <td> {{ $data->name }} </td>
            <td> {{ $data->email }} </td>
        </tr>
    @endforeach
</tbody>
