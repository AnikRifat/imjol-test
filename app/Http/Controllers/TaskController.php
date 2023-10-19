<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all(); // Retrieve all scheduled tasks from the database
        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        return view('tasks.create'); // Display the task creation form
    }

    public function store(Request $request)
    {
        // dd($request->all());
        // Validate the form data
        $validatedData = $request->validate([
            'task_title' => 'required',
            'task_content' => 'required',
            'recipients' => 'required',
            'frequency' => 'required',
            'send_at' => 'required',
        ]);

        // Create and store a new task in the database
        Task::create($validatedData);

        return redirect()->route('tasks.index')
            ->with('success', 'Task created successfully');
    }

    public function show(Task $task)
    {
        return view('tasks.show', compact('task')); // Display the details of a specific task
    }

    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task')); // Display the task editing form
    }

    public function update(Request $request, Task $task)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'task_title' => 'required',
            'task_content' => 'required',
            'recipients' => 'required',
            'frequency' => 'required',
            'send_at' => 'required',
        ]);
        // dd($validatedData);
        // Update the task in the database
        $task->update($validatedData);

        return redirect()->route('tasks.index')
            ->with('success', 'Task updated successfully');
    }

    public function destroy(Task $task)
    {
        $task->delete(); // Delete a task from the database
        return redirect()->route('tasks.index')
            ->with('success', 'Task deleted successfully');
    }
}
