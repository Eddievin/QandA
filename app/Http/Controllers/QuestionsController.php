<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    public function index(){
        return view('index');
    }

    public function phpquestions(){
        return view('pages.phpquestions');
    }

    public function iotquestions(){
        return view('pages.iotquestions');
    }

    public function linuxquestions(){
        $tasks = Task::all();


        return view('pages.linuxquestions', [
            'tasks' => $tasks,
        ]);
    }

    public function sqlquestions(){
        $tasks = Task::all();


        return view('pages.sqlquestions', [
            'tasks' => $tasks,
        ]);
    }

    public function about(){
        return view('pages.about');
    }

    public function sitemap(){
        return view('pages.sitemap');
    }

    public function profile(){
        return view('pages.profile');
    }

    public function welcome(){
        return view('welcome');
    }

    public function add(){

        $tasks = Task::all();


        return view('pages.add', [
            'tasks' => $tasks,
        ]);
    }

}
