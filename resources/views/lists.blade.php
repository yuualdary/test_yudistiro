<table>
    <thead>
        <th>ID</th>
        <th>Email</th>
        <th>First Name</th>
        <th>Last Name</th> 
        <th>Avatar</th>   
    </thead>
    <tbody>
        @foreach ($lists as $list)
            <tr>
                <td>{{ $list->id }} </td>
                <td>{{ $list->email }} </td>
                <td>{{ $list->first_name }} </td>
                <td>{{ $list->last_name }} </td>
               
            </tr> 
        @endforeach

    </tbody>
</table>
