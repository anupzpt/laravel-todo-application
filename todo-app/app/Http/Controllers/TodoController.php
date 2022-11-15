<?php

namespace App\Http\Controllers;
use App\Models\todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
   public function index()
    {
        return view('welcome',['list'=>todo::all()]);
    }
  public function saveTodo(Request $request)
    {
        print_r($request->all());
        $todoObj=new todo();
        $todoObj->title=$request->todo;
        $todoObj->save();
        return redirect('/');
    }
    public function delete($id)
    {
        $data= todo::find($id);
        $data->delete();
        return redirect('/');
    }
    public function edit($id)
    {
        $data= todo::find($id);
        return view('edit',['data'=>$data]);

    }
    public function updateTodo(Request $request)
    {
        $todoObj=todo::find($request->id);
        $todoObj->title=$request->todo;
        $todoObj->save();
        return redirect('/');
    }
    // public function delete(todo $todo, $id )
    // {
    //     $row= $todo::destroy($id);
    //     return back();
    // }
}
