<?php

namespace App\Http\Controllers;

use App\Models\Task; 
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //List all tasks
    public function index()
    {
        $tasks = Task::all();
        return view("tasks.index", compact("tasks")); // fixed typo
    }

    //Show form for creating new task
    public function create()
    {
        return view("tasks.create");
    }

    //Store new task in DB
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        Task::create($request->all());

        return redirect()->route('tasks.index')
            ->with('success', 'Task created successfully.');
    }

    //Show form for editing a task
    public function edit(Task $task)
    {
        return view("tasks.edit", compact("task")); //changed to singular
    }

    //Update an existing task
    public function update(Request $request, Task $task)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        $task->update($request->only('title', 'description'));

        return redirect()->route('tasks.index')
            ->with('success', 'Task updated!');
    }

    //Delete a task
    public function destroy(Task $task)
    {
        $task->delete();

        return redirect()->route("tasks.index")
            ->with("success", "Task deleted!");
    }
}
