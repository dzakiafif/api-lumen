<?php
/**
 * Created by PhpStorm.
 * User: dzaki
 * Date: 06/04/17
 * Time: 18:10
 */

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Task extends Model
{
    protected $table = 'tasks';

    public function createTask(Request $request)
    {
        $task = new Task();
        if($request->get('name') != null){
            $task->name = $request->get('name');
        }

        if($request->get('status') != null){
            $task->status = $request->get('status');
        }

        $task->save();

        return response()->json($task,200);
    }

    public function updateTask(Request $request,$id)
    {
        $task = Task::find($id);

        if($request->get('name') != null){
            $task->name = $request->get('name');
        }

        if($request->get('status') != null){
            $task->status = $request->get('status');
        }

        $task->save();

        return response()->json($task,200);
    }
    
    public function showTask()
    {
        $task = Task::all();

        if(!$task){
            return response()->json(['message'=>"data not found"],404);
        }

        return response()->json($task,200);
    }

    public function deleteTask($id)
    {
        $task = Task::find($id);
        $task->delete();

        return response()->json(['message'=>"data has been deleted"],200);
    }

}