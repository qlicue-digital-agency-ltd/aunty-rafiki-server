<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TaskController extends Controller
{

    public function getTasks($userId)
    {

        $tasks = Task::orderBy('id', 'DESC')->get();

        $filteredTasks = $tasks->reject(function ($task, $index) use ($userId) {

            return $task->user_id != $userId;
        })->values();

        return response()->json(['tasks' =>  $filteredTasks], 200, [], JSON_NUMERIC_CHECK);
    }


    public function getTask($taskId)
    {
        $task = Task::find($taskId);

        if (!$task) return response()->json(['error' => 'Task Not Found'], 404);

        return response()->json(['task' => $task], 200);
    }

    public function postTask(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'category' => 'required',
            'date' => 'required',
            'time' => 'required',
            'user_id' => 'required',
            'stage' => 'required',
            'reminder' => 'required'
        ]);


        if ($validator->fails()) {

            return response()->json(['errors' => $validator->errors()]);
        }

        $task = new   Task();

        $task->name = $request->name;
        $task->category = $request->category;
        $task->date = $request->date;
        $task->time = $request->time;
        $task->stage = $request->stage;
        $task->reminder = $request->reminder;
        $task->user_id = $request->user_id;

        $task->save();

        return response()->json(['task' => $task], 201, [], JSON_NUMERIC_CHECK);
    }

    public function putTask(Request $request, $taskId)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'category' => 'required',
            'date' => 'required',
            'time' => 'required',
            'stage' => 'required',
            'reminder' => 'required'
        ]);


        if ($validator->fails()) {

            return response()->json(['errors' => $validator->errors()]);
        }

        $task = Task::find($taskId);

        if (!$task) return response()->json(['error' => 'Task Not Found'], 404);


        $task->update([
            'name' =>  $request->name,
            'category' =>  $request->category,
            'date' =>  $request->date,
            'time' =>  $request->time,
            'stage' =>  $request->stage,
            'reminder' =>  $request->reminder,
        ]);

        return response()->json(['task' => $task], 201);
    }

    public function deleteTask($taskId)
    {
        $task = Task::find($taskId);

        if (!$task) return response()->json(['error' => 'Task Not Found'], 404);
        $task->delete();

        return response()->json(['task' => 'Task deleted successfully'], 201);
    }
}
