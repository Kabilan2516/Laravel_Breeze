@include('includes.header')
@include('includes.navbar')
<form action="/edit_question?table_name=question_bank&id={{$users[0]->id}}" method="POST">
    @csrf
    <table>
        <tr>
            <th>ID</th>
            <th>QUESTION</th>
            <th>ANSWER</th>
            <th>Created</th>
            <th>Update</th>

        </tr>
        @foreach ($users as $user )
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->question}}</td>
            <td>{{$user->answer}}</td>
            <td>{{$user->created_at}}</td>
            <td>{{$user->updated_at}}</td>

        @endforeach
    </table>
<br><br>
    <table>
        <tr>
            <th>QUESTION</th>
            <th>ANSWER</th>
            <th>UPDATED_AT</th>
        </tr>
        <tr>
            <td><input type="text" name="question" ></td>
            <td><input type="text" name="answer" ></td>
            <td><input id="updated_at" name="updated_at" type="date"></td>
        </tr>
        <tr><td><input type="submit" value="update"></td></tr>
    </table>
</form>

@include('includes.footer')
