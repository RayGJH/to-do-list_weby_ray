<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class taskController extends Controller
{
    //Load Page
    public function index(){
        $tasks = Task::all();
        return view('show', ['tasks' => $tasks]);
    }

    //Add Task
    public function addTask(Request $request){
        $task = $request->validate([
            'name' => ['required', Rule::unique('tasks', 'name')],
            'desc'=> ['required',Rule::unique('tasks', 'desc')],
            'mark'=> ['required',Rule::unique('tasks', 'mark')]
        ]);

        $task['name'] = strip_tags($task['name']);
        $task['desc'] = strip_tags($task['desc']);
        $task['mark'] = strip_tags($task['mark']);

        Task::create($task);

        return redirect('/show');
    }


    //Edit Task
    public function editTask(Task $task){
        return view('edit', ['task' => $task]);
    }

    public function updateTask(Task $tasks, Request $request){
        $task = $request->validate([
            'name' => ['required', Rule::unique('tasks', 'name')],
            'desc'=> ['required',Rule::unique('tasks', 'desc')],
            'mark'=> ['required',Rule::unique('tasks', 'mark')]
        ]);

        $task['name'] = strip_tags($task['name']);
        $task['desc'] = strip_tags($task['desc']);
        $task['mark'] = strip_tags($task['mark']);

        $tasks->update($task);
        
        return redirect('/show');
    }


    //Delete Task
    public function deleteTask(Task $task){
        $task->delete();
        return redirect('/show');
    }
}
