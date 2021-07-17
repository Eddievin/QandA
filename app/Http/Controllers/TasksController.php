<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function store(){
        $task = Task::create([
            'description' => request('description'),
            'answer' => request('answer'),
        ]);
        return redirect('/pages/add');
    }
}
