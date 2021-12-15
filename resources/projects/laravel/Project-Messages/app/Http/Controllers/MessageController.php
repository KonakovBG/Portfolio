<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreMessageRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\InsertProjectController;
use Illuminate\Foundation\Http\FormRequest;
use App\Models\Message;
use App\Models\Project;
use App\Domain\Messages\CreateMessageAction;


class MessageController extends Controller
{   
    /**
    * Return all messages 
    * 
    * @return App\Models\Message;
    **/
    public function index()
    {
        return view('messages/index', [
            'messages' => Message::all()
        ]);  
    }

    /**
    * Return message create form 
    * 
    * @return App\Models\Message;
    **/
    public function create()
    {
        return view('messages/create');
    }

    /**
    * Store message in database
    * 
    * @param  \Illuminate\Http\Request $request
    * @param  \App\Message $message 
    * @return App\Http\Controllers\InsertProjectController;
    * 
    **/
    public function store(StoreMessageRequest $request, Project $project, CreateMessageAction $action)
    {   
        $action->handle($todo);  
 
        return redirect()
            ->route('projects.show',$project);    
    }
}
