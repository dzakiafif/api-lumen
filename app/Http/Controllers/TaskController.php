<?php
/**
 * Created by PhpStorm.
 * User: dzaki
 * Date: 06/04/17
 * Time: 18:11
 */

namespace App\Http\Controllers;


use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    public function index()
    {
        $task = Task::all();

        if(!$task){
            return response()->json(['message'=>"data not found"],404);
        }

        return response()->json($task,200);
    }

    public function create(Request $request)
    {
        $task = Task::create($request->all());

        return response()->json($task,200);
    }

    public function update(Request $request,$id)
    {
        $task = Task::find($id);
        $task->author = $request->input('author');
        $task->address = $request->input('address');
        $task->save();

        return response()->json($task,200);
    }

    public function delete($id)
    {
        $task = Task::find($id);
        $task->delete();

        return response()->json(['message'=>"data has been deleted"],200);
    }

}