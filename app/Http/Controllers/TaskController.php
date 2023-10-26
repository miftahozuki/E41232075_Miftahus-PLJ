<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        // $tasks = Task::all();
        return view('task.task');
    }

    public function store(Request $request)
    {
        Task::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'completed' => false,
        ]);

        $tasks = Task::all();
        return view('task.create', compact('tasks'));
    }
}
