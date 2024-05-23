<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnswersDod extends Model
{

    protected $fillable=['Surname', 'Name', 'Patronymic','city', 'email',
    'phone', 'date_of_dod', 'insType','official_name', 'year_of_admission',
    'learn_dod', 'direction_of_study', 'intresting','question_to_employees','learn_mpei', 'consent_of_personal_data']; //write for import-export
    //protected $dates = ['date_of_dod'];
    protected $casts = [
   // 'date_of_dod' => 'datetime: d.m.Y',
    'date_of_dod' => 'array',
    'learn_mpei' => 'array',
    'learn_dod' => 'array'];
    protected $table = 'answers_dod';
    protected $primaryKey = 'id_answers_dod';
}
