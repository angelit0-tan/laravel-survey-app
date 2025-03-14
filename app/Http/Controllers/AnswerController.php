<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\AnswerOption;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->has('answers') && $request->answers) {
            $email = $request->email ?? '';
            $answers = $request->answers;
            $answerData = Answer::create([
                'email' => $email
            ]);
            $answerData->options()->sync($answers);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }
}
