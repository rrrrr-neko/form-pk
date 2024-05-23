@extends('layouts.app')

@section('title')
    Домашная страница
@endsection

@section('content')
        <div>
        <h1>Форма ДОД</h1>
        <ul>
            <li><a href="{{ route('view_form_dod') }}">Просмотр формы</a></li>
            <li><a href="{{ route('edit_question_dod') }}">Редактирование вопросов</a></li>
            <li><a href="{{ route('view_answer_dod') }}">Просмотр ответов</a></li>
        <ul>
        </div> 
        <div>
        <h1>Форма Экскурсии</h1>
        <ul>
            <li><a href="{{ route('view_form_excursion') }}">Просмотр формы</a></li>
            <li><a href="{{ route('edit_question_excursion') }}">Редактирование вопросов</a></li>
            <li><a href="{{ route('view_answer_excursion') }}">Просмотр ответов</a></li>
        <ul>
        </br>
        <a href="{{ route('logActivity') }}">Журнал активности</a>
        </br>
        <a>Зарегестрировать пользователя</a>
        </br>
        </div> 
@endsection