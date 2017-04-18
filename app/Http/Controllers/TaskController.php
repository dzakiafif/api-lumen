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
       $task = new Task();
       return $task->showTask();
    }

    public function create(Request $request)
    {
        $task = new Task();
        return $task->createTask($request);
    }

    public function update(Request $request,$id)
    {
        $task = new Task();
        return $task->updateTask($request,$id);
    }

    public function delete($id)
    {
        $task = new Task();
        return $task->deleteTask($id);
    }

}