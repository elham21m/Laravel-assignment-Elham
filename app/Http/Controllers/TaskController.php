<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return view('index', [
            'tasks' => \App\Models\Task::all(),
        ]);
    }
    public function showTodos($id)
    {
      $task = \App\Models\Task::find($id);

      return view ('task', [
          'task' => $task, ]);
    }

    public function deleteTodos($id)
    {
      $task = \App\Models\Task::find($id)->delete();
        return view('delete');
    }

    public function order()
    {
        $tasks = \App\Models\Task::orderBy('title', 'asc')
        ->get();

        return view('orderedTodos', [
            'tasks' => $tasks,
        ]);
    }
    // public function orderedTodos()
    // {
    //     $tasks = \App\Models\Task::orderBy('description', 'asc')->get();
    //     return view('orderedTodos', [
    //         'tasks' => $tasks,
    //     ]);
    // }

//     use \App\Models\Task;
//     {
//         $tasks = Task::table('title')
//         ->orderBy('title', 'desc')
//         ->get();
//
    }
//
// }
// users = DB::table('users')
//                 ->orderBy('name', 'desc')
//                 ->get();
