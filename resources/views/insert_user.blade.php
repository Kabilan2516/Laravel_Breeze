@include('includes.header')
@include('includes.navbar')
<form method="POST" action="/insert_user" id="user_form" >
    @csrf
    <label for="table_name">Table Name:
        <input type="text" name="table_name" value="user_info">
    </label>

    <label for="name">Name:
        <input id="name" name="name" type="text"></label><br><br>
    <label for="age">Age:
        <input id="age" name="age" type="number"></label><br><br>
    <label for="mailid"> Mail ID:
        <input id="mail_id" name="mail_id" type="text"> </label>  <br> <br>
    <label for="created_at"> Today date:
        <input id="created_at" name="created_at" type="date"> </label>  <br> <br>
        <button name="insert">INSERT</button>
</form>
@include('includes.footer')
