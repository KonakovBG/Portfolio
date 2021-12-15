<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\InsertProjectController;
use Illuminate\Foundation\Http\FormRequest;
use App\Models\Project;
use App\Http\Requests\StoreProjectRequest;
use App\Domain\Projects\CreateProjectAction;

class ProjectController extends Controller
{
    /**
    * Return all projects
    * 
    * @return App\Models\Project;
    **/    
    public function index()
    {
        return view('projects/index', [
            'projects' => Project::all()
        ]);
    } 

    /**
    * Return project create form
    * 
    * @return App\Models\Project; 
    **/
    public function create()
    {
        return view('projects/create');
    }

    /**
    * Return single project
    * 
    * @return App\Models\Project;
    **/    
    public function show(Project $project)
    {
        return view('projects/show',['project' => $project]);

    }

    /**
    * Store project in database
    * 
    * @param  \Illuminate\Http\Request $request
    * @param  \App\Todo $todo 
    * @return App\Models\Project;
    **/ 

    public function store(StoreProjectRequest $request, CreateProjectAction $action)
    {
        $action->handle([
          'title' => $request->input('title'),
          'description' => $request->input('description'),
          'author' => $request->input('author'),
          'status' => $request->input('status'),
        ]);

        return redirect()
            ->route('projects.index');

        // Project::create([
        //     'title' => $request->input('title'),
        //     'description' => $request->input('description'),
        //     'author' => $request->input('author'),
        //     'status' => $request->input('status'),
        // ]);

        // return redirect()
        //     ->route('projects.index');                    
    }
}
