<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\todos;

class todosController extends Controller
{
    public function index()
    {
        $todos = todos::all();
        $data = compact('todos');
        return view("welcome")->with($data);
    }
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'todo' => 'required',
                'date' => 'required'
            ]
        );
        $todo = new todos;
        $todo->name = $request['name'];
        $todo->todo = $request['todo'];
        $todo->date = $request['date'];
        $todo->save();

        return redirect(route("todo.home"));
    }

    public function delete($id)
    {
        todos::find($id)->delete();
        return redirect(route("todo.home"));
    }

    public function edit($id)
    {
        $todo = todos::find($id);
        $data = compact('todo');
        return view("update")->with($data);
    }

    public function updateData(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'todo' => 'required',
                'date' => 'required'
            ]
        );
        $id = $request['id'];
        $todo = todos::find($id);
        $todo->name = $request['name'];
        $todo->todo = $request['todo'];
        $todo->date = $request['date'];
        $todo->save();

        return redirect(route("todo.home"));
    }
}
