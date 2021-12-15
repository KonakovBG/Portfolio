<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use App\Models\Project;
use App\Http\Requests\StoreTodoRequest;
use App\Domain\Todos\CreateTodoAction;
use App\Domain\Todos\UpdateTodoStatusAction;

class TodoController extends Controller
{
    /**
    * Return all todos 
    * 
    * @return App\Models\Todo;
    **/
    public function index()
    {
        return view('todos/index',[
            'todos' => Todo::all()
        ]);
    }

    /**
    * Return todo create form
    * 
    * @return App\Models\Todo;
    **/
    public function create()
    {
        return view('todos/create');
    }

    /**
    * Return single todo
    * 
    * @return App\Models\Todo; 
    **/
    public function show(Todo $todo)
    {
        return view('todos/show',['todoes' => $todo]);
    }

    /**
    * Store todo in database
    * 
    * @return App\Http\Controllers\InsertProjectController;
    **/
    public function store(StoreTodoRequest $request, Project $project, CreateTodoAction $action)
    {
        $todo = $action->handle([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'author' => $request->input('author'),
            'status' => $request->input('status'),
            'project_id' => $project->id
    ]);

        return redirect()
            ->route('projects.show',$project);
    }

    /**
    * Update todo status
    * 
    * @param  \Illuminate\Http\Request $request
    * @param  \App\Todo $todo 
    * @return App\Models\Todo;  
    **/
    public function update(Request $request, Todo $todo, UpdateTodoStatusAction $action)
    {
        $todo->update([
            'status' => 'finished'
        ]);

        return redirect()
            ->route('projects.index');
    }
}
