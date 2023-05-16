@include('includes.header')
@include('includes.navbar')
    <table>
        <tr>
            @foreach($columnNames as $columnName)
            <th>{{ $columnName }}</th>
            @endforeach
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach ($users as $user )
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->age}}</td>
            <td>{{$user->mail_id}}</td>
            <td>{{$user->created_at}}</td>
            <td>{{$user->updated_at}}</td>
            <td><a href="/edit_users?table_name=user_info&id={{$user->id}}">Edit</a></td>
            <td><a href="delete?table_name=user_info&id={{$user->id}}">Delete</a></td>
        </tr>
        @endforeach
    </table>
@include('includes.footer')
