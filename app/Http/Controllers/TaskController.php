<?php

namespace App\Http\Controllers;

use App\Models\Task;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return view('welcome', [
            'tasks' => Task::all()
        ]);
    }

    public function store()
    {
        // Create a new task model object
        $task = new Task();
        // Copy request data (representing the form inputs) to the
        // object's properties
        $task->title = request()['title'] == '' ? 'title' : request()['description'];
        $task->description = request()['description'] == '' ? 'description' : request()['description'];
        $task->priority = request()['priority'] == '' ? 0 : request()['description'];
        $task->state = request()['state']== '' ? 'new' : request()['description'];
        // Save the model's state to the database
        // (which means inserting a new record in this case)
        $task->save();
        // Redirect to the blog index page
        return redirect()->route('home');
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function show(Task $task)
    {
        return view('tasks.show', [
            'task' => $task
        ]);
    }
}
