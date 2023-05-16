@include('includes.header')
@include('includes.navbar')

<form action="/edit_users?table_name=user_info&id={{$users[0]->id}}" method="post">
    @csrf
    <table>

        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>Age</th>
            <th>Mail-Id</th>
            <th>Created</th>
            <th>Updated</th>
        </tr>
        @foreach ($users as $user )
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->age}}</td>
            <td>{{$user->mail_id}}</td>
            <td>{{$user->created_at}}</td>
            <td>{{$user->updated_at}}</td>
        </tr>
        @endforeach
    </table><br><br>
    <table>
        <tr>
        <th>NAME</th>
        <th>Age</th>
        <th>Mail-Id</th>
        <th>update date</th>
        </tr>
        <tr>
            <td><input type="text" name="name" ></td>
            <td><input type="number" name="age" ></td>
            <td><input type="text" name="mail_id"></td>
            <td><input id="updated_at" name="updated_at" type="date"></td>
        </tr>
        <tr><td><input type="submit" value="update"></td></tr>
    </table>
</form>
@include('includes.footer')
