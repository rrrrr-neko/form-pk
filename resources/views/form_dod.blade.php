@extends('layouts.form')

@section('title')
    Регистрация на ДОД
@endsection

@section('content')

<article class="registration">

        <form class="form_registration"  method="post"   action="{{route('add_answer')}}">
        @if(flash()->message)
        <div style="font-size: 16px;">
            {{ flash()->message }}
        <br>
        </div>
        @endif
        @csrf
            <span class="title_registrerion">Регистрация на День открытых дверей</span><br><br>
            <fieldset>           
                <span class="text-field__label ">Пройдите регистрацию и будьте в курсе всей актуальной информации!
                    <br><br>
                    Данная форма не является обязательной и несёт аналитический характер. Её заполнение позволит нам понять, что Вам интересно, 
                    подготовить промо-материалы и сделает Ваше пребывание в НИУ «МЭИ» комфортным.<br></span>
            </fieldset>
            <fieldset>           
                <span class="text-field__label ">Введите ФИО: *</span>
                <div class="field_text_horizontal">
                        
                    <input type = "text" id = "surname" name = "surname" placeholder="Фамилия" class="input_text_horizontal" required>
                    <label for = "surname" class="label_text_horizontal"></label>

                    <input type = "text" id = "name" name = "name" placeholder="Имя" class="input_text_horizontal" required>
                    <label for = "name" class="label_text_horizontal"></label>

                    <input type = "text" id = "patronymic" name = "patronymic" placeholder="Отчество" class="input_text_horizontal">                        
                    <label for = "patronymic" class="label_text_horizontal"></label>                    
                </div>           
            </fieldset>
            
            <fieldset>
                <span class="text-field__label ">Регион и город, в котором проживаете и учитесь *</span>
                <div class="text-field__radio">
                    <div class="text-field__radio_item">
                        <input type = "radio" id = "place-1" name = "city" value="Москва" class="radio_custom">
                        <label for = "place-1" class="text-field__label_checkbox">Москва</label>
                    </div>
                    
                    <div class="text-field__radio_item">
                        <input type = "radio" id = "place-2" name = "city" value="Москвоская область" class="radio_custom">
                        <label for = "place-2" class="text-field__label_checkbox">Московская область</label>
                    </div>
                    
                    <div class="text-field__radio_item">
                        <input type = "radio" id = "other_place" name = "city" value="Other" class="radio_custom">
                        <label for = "other_place" class="text-field__label_checkbox">Другое&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;         
                             <input type="text" id="other_place_of_residence" name="other_city" class="text-field__input">
                        </label>
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <label for = "email" class="text-field__label">Введите Ваш e-mail (укажите действительный адрес электронной почты, 
                    чтобы перед Днем открытых дверей мы напомнили Вам о событии посредством рассылки): *</label>
                <input type = "email" id = "email" name = "email" placeholder="Email" class="text-field__input" required>
            </fieldset>
            <fieldset>
                <label for = "phone" class="text-field__label">Введите Ваш контактный телефон: *</label>
                <input type = "phone" id = "phone" name = "phone" placeholder="+7-999-888-88-88" class="text-field__input" required> 
            </fieldset>

            <fieldset>
                <!-- Брать данные о ДОДах из БД-->
                <!-- как сделать чек бокс обязательным полем - js или ларавель-->
                <!-- Связь с другим сделать через js
                    когда выбран вариант другого, появляется текстовое поле.
                -->
                <span class="text-field__label">Какой/какие из Дней открытых дверей в весеннем семестре Вы планируете посетить?</span>
                <div class="text-field__checkbox">

                    <div class="text-field__checkbox_item">
                        <input type = "checkbox" id = "date-3" name = "date_of_dod[]" value="21.04.2024" class="checkbox_custom">
                        <label for = "date-3">21.04.2024</label>
                    </div>

                    <div class="text-field__checkbox_item">
                        <input type = "checkbox" id = "date-4" name = "date_of_dod[]" value="19.05.2024" class="checkbox_custom">
                        <label for = "date-4">19.05.2024</label>
                    </div>

                    <div class="text-field__checkbox_item">                              
                        <input type = "checkbox" id = "date_other" name = "date_of_dod[]" value="Другая дата" class="checkbox_custom">               
                        <label for = "date_other" id = "date_other_label">
                            Планирую посетить День открытых дверей осенью 2024 года
                        </label>
                    </div>

                    <div class="text-field-other hidden" id="data_other_div" >                        
                        <input type="text" id="data_other_text" name="data_other_text" placeholder="Другое" class="text-field__input" disabled>
                        <label for=""></label>
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <span class="text-field__label ">Выберите планируемый год поступления абитуриента (если Вы родитель, 
                    опекун или сопровождающий — выберите год поступления абитуриента) *</span>
                <div class="text-field__radio">
                    <div class="text-field__radio_item">
                        <input type = "radio" id = "year-1" name = "year_of_admission" value="2024" class="radio_custom" required>
                        <label for = "year-1" class="text-field__label_checkbox">2024</label>
                    </div>
                    
                    <div class="text-field__radio_item">
                        <input type = "radio" id = "year-2" name = "year_of_admission" value="2025" class="radio_custom">
                        <label for = "year-2" class="text-field__label_checkbox">2025</label>
                    </div>
                    
                    <div class="text-field__radio_item">
                        <input type = "radio" id = "other_year" name = "year_of_admission" value="Другое" class="radio_custom">
                        <label for = "other_year" class="text-field__label_checkbox">Другое&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;         
                             <!--input type="text" id="other_year_of_admission_text" name="year_of_admission" class="text-field__input"-->
                        </label>
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <span class="text-field__label ">Выберите уровень образования, на базе которого Вы планируете поступать к нам: *</span>
                <div  class="text-field__radio">
                    <div class="text-field__radio_item">
                        <input type = "radio" id = "school" name = "insType" value="Среднее общее образование (11 классов)" class="radio_custom" required>
                        <label for = "school">Среднее общее образование (11 классов)</label>
                    </div>
                    <div class="text-field__radio_item">
                        <input type = "radio" id = "SPO" name = "insType" value="Среднее профессиональное образование (колледж, техникум и пр.)" class="radio_custom">
                        <label for = "SPO">Среднее профессиональное образование (колледж, техникум и пр.)</label>
                    </div>
                    <div class="text-field__radio_item">
                        <input type = "radio" id = "university" name = "insType" value="Высшее образование" class="radio_custom">
                        <label for = "university">Высшее образование</label>
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <label for = "official_name" class="text-field__label">Введите название учебного заведения, в котором Вы обучаетесь на данный момент: *</label>
                <input type = "text" id = "official_name" name = "official_name" placeholder="ГБОУ Школа №000" class="text-field__input" required>
            </fieldset>

            <fieldset>
                <span class="text-field__label ">Откуда Вы узнали про наш День открытых дверей? </span>
                <div class="text-field__checkbox">
                    <div class="text-field__checkbox_item">
                        <input type = "checkbox" id = "friend" name = "learn_dod[]" value="От друзей/знакомых/родственников" class="checkbox_custom">
                        <label for = "friend">От друзей/знакомых/родственников</label>
                    </div>

                    <div class="text-field__checkbox_item">
                        <input type = "checkbox" id = "social_network" name = "learn_dod[]" value="Социальные сети" class="checkbox_custom">
                        <label for = "social_network">Социальные сети</label>
                    </div>

                    <div class="text-field__checkbox_item">
                        <input type = "checkbox" id = "Educ_portal" name = "learn_dod[]" value="Образовательные порталы/выставки" class="checkbox_custom">
                        <label for = "Educ_portal">Образовательные порталы/выставки</label>
                    </div>

                    <div class="text-field__checkbox_item">
                        <input type = "checkbox" id = "pre-univer_train" name = "learn_dod[]" value="Довузовская подготовка/курсы" class="checkbox_custom">
                        <label for = "pre-univer_train">Довузовская подготовка/курсы</label>
                    </div>

                    <div class="text-field__checkbox_item">
                        <input type = "checkbox" id = "contests" name = "learn_dod[]" value="Олимпиады" class="checkbox_custom">
                        <label for = "contests">Олимпиады</label>
                    </div>

                    <div class="text-field__checkbox_item">
                        <input type = "checkbox" id = "excursion" name = "learn_dod[]" value="Посещение учебного заведения представителями ВУЗа" class="checkbox_custom">
                        <label for = "excursion">Посещение учебного заведения представителями ВУЗа</label>
                    </div>
                    <!-- Прогуглить как сделать текстовый вид другого-->
                    <div class="text-field__checkbox_item">
                        <input type = "checkbox" id = "other_learn_dod" name = "learn_dod[]" class="checkbox_custom" value="Другое">
                        <label for = "other_learn_dod">Другое</label>
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <label for = "direction_of_study" class="text-field__label">Какие направления обучения в НИУ "МЭИ" Вас интересуют? *</label>
                <input type = "text" id = "direction_of_study" name = "direction_of_study" class="text-field__input" required>
            </fieldset>

            <fieldset>
                <label for = "intresting" class="text-field__label">Что Вам было бы интересно увидеть/узнать на Дне открытых дверей МЭИ?</label>
                <input type = "text" id = "intresting" name = "intresting" class="text-field__input">
            </fieldset>

            <fieldset>
            <div class="text-field">
                <div>
                    <label for = "question_to_employees" class="text-field__label">Если у Вас есть вопросы к сотрудникам Приемной комиссии, в этом поле Вы можете их задать :) </label>
                    <input type = "text" id = "question_to_employees" name = "question_to_employees" class="text-field__input">
                </div>
            </div>
            </fieldset>

            <fieldset>
                <!-- как сделать чек бокс обязательным полем-->
                <span class="text-field__label">Откуда Вы узнали о нас (какое мероприятие посещали ранее)?</span>
                <div class="text-field__checkbox">
                    <div class="text-field__checkbox_item">
                        <input type="checkbox" id="portal_postypi_online" name="learn_mpei[]" value="Портал &quotПоступи Онлайн&quot" class="checkbox_custom">
                        <label for="portal_postypi_online">Портал "Поступи Онлайн"</label>
                    </div>
                    
                    <div class="text-field__checkbox_item">
                        <input type="checkbox" id="portal_ucheba_ru" name="learn_mpei[]" value="Портал &quotУчёба.ру&quot" class="checkbox_custom">
                        <label for="portal_ucheba_ru">Портал "Учёба.ру"</label>
                    </div>
                    
                    <div class="text-field__checkbox_item">                    
                        <input type="checkbox" id="portal_vuzopedia" name="learn_mpei[]" value="Портал &quotВузопедия&quot" class="checkbox_custom">
                        <label for="portal_vuzopedia">Портал "Вузопедия"</label>
                    </div>
                    
                    <div class="text-field__checkbox_item">                    
                        <input type="checkbox" id="reclama_vk" name="learn_mpei[]" value="Реклама в Вконтакте" class="checkbox_custom">
                        <label for="reclama_vk">Реклама в Вконтакте</label>
                    </div>
                    <div class="text-field__checkbox_item">
                        <input type="checkbox" id="reclama_yandex" name="learn_mpei[]" value="Реклама в Яндекс" class="checkbox_custom">
                        <label for="reclama_yandex">Реклама в Яндекс</label>
                    </div>
                    
                    <div class="text-field__checkbox_item">                    
                        <input type="checkbox" id="obraz_and_carier" name="learn_mpei[]" value="Выставка &quotОбразование и карьера&quot" class="checkbox_custom">
                        <label for="obraz_and_carier">Выставка "Образование и карьера"</label>
                    </div>
                    
                    <div class="text-field__checkbox_item">                    
                        <input type="checkbox" id="navigator_postypleniya" name="learn_mpei[]" value="Выставка &quotНавигатор поступления&quot" class="checkbox_custom">
                        <label for="navigator_postypleniya">Выставка "Навигатор поступления"</label>
                    </div>
                    
                    <div class="text-field__checkbox_item">                    
                        <input type="checkbox" id="excursion_MPEI" name="learn_mpei[]" value="Экскурсия в НИУ &quotМЭИ&quot" class="checkbox_custom">
                        <label for="excursion_MPEI">Экскурсия в НИУ "МЭИ"</label>
                    </div>
                    
                    <div class="text-field__checkbox_item">
                        <input type="checkbox" id="olimpiada" name="learn_mpei[]" value="Писал Олимпиаду школьников в НИУ &quotМЭИ&quot" class="checkbox_custom">
                        <label for="olimpiada">Писал Олимпиаду школьников в НИУ "МЭИ"</label>
                    </div>
                    
                    <div class="text-field__checkbox_item">                    
                        <input type="checkbox" id="conference" name="learn_mpei[]" value="Участвовал в конференции &quotШаг в будущее&quot" class="checkbox_custom">
                        <label for="conference">Участвовал в конференции "Шаг в будущее"</label>
                    </div>
                    
                    <div class="text-field__checkbox_item">                    
                        <input type="checkbox" id="dod" name="learn_mpei[]" value="Посетил День открытых дверей НИУ &quotМЭИ&quot" class="checkbox_custom">
                        <label for = "dod">Посетил День открытых дверей НИУ "МЭИ"</label>
                    </div>                    
                    <!-- Прогуглить как сделать текстовый вид другого-->
                    <div class="text-field__checkbox_item">
                        <input type = "checkbox" id = "other_event" name = "learn_mpei[]" value="other_event"  class="checkbox_custom">
                        <label for = "other_event">Другое</label>
                    </div>
            </fieldset>

            <fieldset>
                <span class="text-field__label">Согласие на обработку персональных данных:</span>
                <div  class="consent">
                    <img src="/css/согласие.jpg" alt="согласие на обработку персональных данных">
                </div>
                <div class="text-field__checkbox_item">                                
                    <input type = "checkbox" id = "consent_of_personal_data" name = "consent_of_personal_data"  class="checkbox_custom" value="1" required>                                
                    <label for = "consent_of_personal_data">Даю согласие на обработку персональных данных</label>
                </div>
            </fieldset>
            <button class="form_button" type="submit">Отправить</button>
        </form>
    </article>
@endsection