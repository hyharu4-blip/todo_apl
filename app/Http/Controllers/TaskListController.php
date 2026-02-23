<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Task;

class TaskListController extends Controller
{
    //
    public function index(Request $request){
        $tasks = Task::where("user_id","=",Auth::id())
                    ->orderBy('deadline','asc')
                    ->get();
        return view('task.list', compact('tasks'));
    }

    public function finish(Request $request, $task_id){
        $task = Task::findOrFail($task_id);

        $task->update([
            'finish_flg' => 1,
            'finish_date' => now(),
        ]);

        return redirect()->route('show_task_list', ['home_move' => $request->get('home_move')]);
    }
    
    public function delete(Request $request, $task_id){
        $task = Task::findOrFail($task_id);

        $task->delete();

        return redirect()->route('show_task_list', ['home_move' => $request->get('home_move')]);
    }
}
