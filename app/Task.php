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
    protected $fillable = ['name','status'];

    public function createTask(Request $request)
    {
        $task = Task::create($request->all());

        return response()->json($task,200);
    }

    public function updateTask(Request $request,$id)
    {
        $task = Task::find($id);
        $task->name = $request->input('name');
        $task->status = $request->input('status');
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