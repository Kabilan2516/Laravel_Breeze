<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CrudController extends Controller
{
    public function insert(Request $request)
    { //insert data into database

        $tableName = $request->input('table_name');

        $inputData=$request->except('_token','table_name','insert');
        $values = [];
        foreach ($inputData as $key => $value)
        {
          $values[$key] = $value;
        }
         DB::table($tableName)->insert($values);

         if($tableName == 'user_info')
         {
         return "Record insert success <a href='/insert_user'>click hear</a>";
         }
          elseif($tableName == 'question_bank')
         {
         return "Record insert success <a href='/insert_question'>click hear</a>";
         }

    }

    public function select(Request $request)
    {   $tableName=$request->input('table_name');

        $columnNames = DB::getSchemaBuilder()->getColumnListing($tableName);

        $users=DB::table($tableName)->select('*')->get();

        if($tableName == 'user_info')
        {
            return view('users',['users' => $users],['columnNames' => $columnNames]);
        }
        elseif($tableName == 'question_bank')
        {
            return view('question',['users' => $users],['columnNames' => $columnNames]);
        }

    }

    public function edit(Request $request)
    {
        $tableName =$request->input('table_name');
        $id=$request->input('id');

        $users=DB::table($tableName)->select('*')->where('id','=',$id)->get();

        if($tableName == 'user_info'){
        return view('edit_users',['users' => $users]);
        }
        elseif($tableName == 'question_bank')
        {
            return view('edit_question',['users'=> $users]);
        }
    }

    public function update(Request $request )
    {
        $tableName = $request->input('table_name');
        $id=$request->input('id');

        $inputData = $request->except('_token','table_name','update','id');
        $values = [];

        foreach ($inputData as $key => $value)
        {
          $values[$key] = $value;
        }
        DB::table($tableName)->where('id','=',$id)->update($values);
        if($tableName == 'user_info')
        return "record update succefully <a href='/view?table_name=users'>click hear</a>";
        elseif($tableName == 'question_bank')
        return "record update succefully <a href='view?table_name=question_bank'>click hear</a>";
    }
    public function delete( Request $request)
    {
        $tableName=$request->input('table_name');
        $id=$request->input('id');

        $query= DB::table($tableName)->where('id','=',$id);
        $query->delete();
        return redirect()->back();
    }

    public function insert_form()
    {
        return view('insert_user'); //it just show the insert page form
    }
    public function question_form()
    {
        return view('insert_question');
    }
}
