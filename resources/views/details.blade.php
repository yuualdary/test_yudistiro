<table>
    <thead>
        <th>ID</th>
        <th>Email</th>
        <th>First Name</th>
        <th>Last Name</th> 
        <th>Avatar</th>   
    </thead>
    <tbody>
        @foreach ($details as $detail)
            <tr>
                <td>{{ $detail->id }} </td>
                <td>{{ $detail->email }} </td>
                <td>{{ $detail->first_name }} </td>
                <td>{{ $detail->last_name }} </td>
            
            </tr> 
        @endforeach

    </tbody>
</table>
