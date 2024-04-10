<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function index(){
        return view('index');
    }

    public function view_form_dod(){
        return view('index');
    }

    public function edit_question_dod(){
        return view('index');
    }

    public function view_answer_dod(){
        return view('index');
    }

    public function view_form_excursion(){
        return view('index');
    }

    public function edit_question_excursion(){
        return view('index');
    }

    public function view_answer_excursion(){
        return view('index');
    }


    /* Журнал активности */
    public function myTestAddToLog()
    {
        \LogActivity::addToLog('My Testing Add To Log.');
        dd('log insert successfully.');
    }

    /**
     * Вывод панели управления приложения.
     *
     * @return \Illuminate\Http\Response
     */
    public function logActivity()
    {
        $logs = \LogActivity::logActivityLists();
        return view('logActivity',compact('logs'));
    }
}
