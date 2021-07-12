<?php

namespace App\Http\Controllers;

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
        return view('pages.linuxquestions');
    }

    public function sqlquestions(){
        return view('pages.sqlquestions');
    }
}
