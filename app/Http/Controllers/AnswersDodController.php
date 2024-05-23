<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AnswersDod;

class AnswersDodController extends Controller
{
    public function view_answers_dod(Request $request)        {
        $allAnswersDod = AnswersDod::all();
        return view('answers_dod', compact('allAnswersDod'));
    }



    public function add_answer(Request $req)        {

        $answer = new AnswersDod;
        $arr = $req->learn_dod;
        //dd($req->all(), $arr);
        $l_dod = implode(", ", $arr);
        $answer->Surname = $req->input('surname');
        $answer->Name = $req->input('name');
        $answer->Patronymic = $req->input('patronymic');
        $answer->city = $req->input('city');
        $answer->Email = $req->input('email');
        $answer->phone = $req->input('phone');
        $answer->date_of_dod = $req->input('date_of_dod'); //загрузка даты дода
        $answer->year_of_admission = $req->input('year_of_admission');
        $answer->insType = $req->input('insType');
        $answer->official_name = $req->input('official_name');
        $answer->learn_dod = $arr;
        $answer->direction_of_study = $req->input('direction_of_study');        
        $answer->intresting = $req->input('intresting');
        $answer->question_to_employees = $req->input('question_to_employees');
        $answer->learn_mpei = $req->input('learn_mpei');
        $answer->consent_of_personal_data = $req->input('consent_of_personal_data');
    
        $answer->save(); 

        flash('Форма успешно заполнена');

        return redirect()->back();;
    }
}
