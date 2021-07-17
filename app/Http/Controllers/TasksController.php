<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function store(){
        $task = Task::create([
            'description' => request('description'),
        ]);
        return redirect('/pages/add');
    }
}
