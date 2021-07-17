<?php

namespace App\Http\Controllers;

use App\Models\Question as ModelsQuestion;
use Illuminate\Http\Request;
use Symfony\Component\Console\Question\Question;

class AddController extends Controller
{
    public function store(){
        $question = ModelsQuestion::create([
            'question' => request('question'),
        ]);

        return dd($question);
    }
}
