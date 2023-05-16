@include('includes.header')
@include('includes.navbar')
<form action="/insert_question" method="post" id="question_form">
    @csrf
    <label for="table_name">Table Name:
        <input type="text" name="table_name" value="question_bank">
    </label>
    <label>Question <input type="text" name="question"></label><br>
    <label>Answer <input type="text" name="answer"></label>
    <label for="created_at"> Today date:
        <input id="created_at" name="created_at" type="date"> </label>  <br> <br>
    <button name="insert">INSERT</button>
</form>
@include('includes.footer')
