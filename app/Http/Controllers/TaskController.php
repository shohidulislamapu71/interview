<?php

namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController
{
    public function CreateTask(Request $request) {

        // validate input
        $validatedData = $request->validate([
            'title' => 'required',
        ]);

        // create task object
        $Task = new Task();
        $Task->title = $validatedData['title'];
        $Task->save();

        // return response
        return response()->json([
            'Body' => $Task
        ]);
    }

   public function UpdateTask(Request $request, $id) {

        // validate input
        $validatedData = $request->validate([
            'title' => 'required',
            'is_completed' => 'nullable|boolean',
        ]);

        // update task object
        $Task = Task::find($id);
        $Task->title = $validatedData['title'];
        $Task->is_completed = $validatedData['is_completed'];
        $Task->save();

        // return response
        return response()->json([
            'Body' => $Task
        ]);
    }

    public function GetPendingTasks() {
        $Tasks = Task::where('is_completed', false)->get();
        return response()->json([
            'Body' => $Tasks
        ]);
    }
}
