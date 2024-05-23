@extends('layouts.form')

@section('title')
    Регистрация на Экскурсию
@endsection

@section('content')

    <article class="registration">
        <span class="title_registrerion">Регистрация</span>
        <form class="form_registration">

            <div class="text-field">
                <span class="text-field__label ">Введите ФИО:</span>
                <div class="field_text_horizontal">
                        
                    <input type = "text" id = "surname" name = "surname" placeholder="Фамилия" class="input_text_horizontal" required>
                    <label for = "surname" class="label_text_horizontal"></label>

                    <input type = "text" id = "name" name = "name" placeholder="Имя" class="input_text_horizontal" required>
                    <label for = "name" class="label_text_horizontal"></label>

                    <input type = "text" id = "patronymic" name = "patronymic" placeholder="Отчество" class="input_text_horizontal">                        
                    <label for = "patronymic" class="label_text_horizontal"></label>
                    
                </div>
            </div>
            <hr>
            <div class="text-field">
                <label for = "email" class="text-field__label">Введите Ваш e-mail (укажите действительный адрес электронной почты, 
                    чтобы перед Днем открытых дверей мы напомнили Вам о событии посредством рассылки):</label>
                <input type = "email" id = "email" name = "email" placeholder="Email" class="text-field__input">
            </div>
            <hr>
            <div class="text-field">
                <div>
                    <label for = "phone" class="text-field__label">Введите Ваш контактный телефон:</label>
                    <input type = "phone" id = "phone" name = "phone" placeholder="+7-999-888-88-88" class="text-field__input">
                </div>
            </div>

            <hr>
            <div class="text-field">
                <!-- Брать данные о ДОДах из БД-->
                <!-- как сделать чек бокс обязательным полем - js или ларавель-->
                <!-- Связь с другим сделать через js
                    когда выбран вариант другого, появляется текстовое поле.
                -->
                <span class="text-field__label">Какой/какие из Дней открытых дверей в осеннем семестре Вы планируете посетить?</span>
                <div class="text-field__checkbox">

                    <div class="text-field__checkbox_item">
                        <input type = "checkbox" id = "date-1" name = "date-1" value="18.02.2024" class="checkbox_custom">
                        <label for = "date-1">18.02.2024</label>
                    </div>

                    <div class="text-field__checkbox_item">
                        <input type = "checkbox" id = "date-2" name = "date-2" value="24.03.2024" class="checkbox_custom">
                        <label for = "date-2">24.03.2024</label>
                    </div>

                    <div class="text-field__checkbox_item">
                        <input type = "checkbox" id = "date-3" name = "date-3" value="21.04.2024" class="checkbox_custom">
                        <label for = "date-3">21.04.2024</label>
                    </div>

                    <div class="text-field__checkbox_item">
                        <input type = "checkbox" id = "date-4" name = "date-4" value="19.05.2024" class="checkbox_custom">
                        <label for = "date-4">19.05.2024</label>
                    </div>

                    <div class="text-field__checkbox_item">                              
                        <input type = "checkbox" id = "date_other" name = "date_other" value="date_other" class="checkbox_custom">               
                        <label for = "date_other" id = "date_other_label">
                            Другое
                        </label>
                    </div>

                    <div class="text-field-other hidden" id="data_other_div" >                        
                        <input type="text" id="data_other_text" name="data_other_text" placeholder="Другое" class="text-field__input" disabled>
                        <label for=""></label>
                    </div>
                </div>
            </div>

            <hr>
            <div class="text-field">
                <span class="text-field__label ">Выберите планируемый год поступления абитуриента (если Вы родитель, 
                    опекун или сопровождающий — выберите год поступления абитуриента) </span>
                <div class="text-field__radio">
                    <div class="text-field__radio_item">
                        <input type = "radio" id = "year-1" name = "year_of_admission" value="2024" class="radio_custom">
                        <label for = "year-1" class="text-field__label_checkbox">2024</label>
                    </div>
                    <div class="text-field__radio_item">
                        <input type = "radio" id = "year-2" name = "year_of_admission" value="2025" class="radio_custom">
                        <label for = "year-2" class="text-field__label_checkbox">2025</label>
                    </div>
                    <!-- Прогуглить как сделать текстовый вид другого-->
                    <div class="text-field__radio_item">
                        <input type = "radio" id = "other_year" name = "year_of_admission" value="Other" class="radio_custom">
                        <label for = "other_year" class="text-field__label_checkbox">Другое
                             <input type="text" id="other_year_of_admission_text" name="year_of_admission">
                        </label>
                    </div>
                </div>
            </div>
            <hr>
            <div class="text-field">
                <span class="text-field__label ">Выберите уровень образования, на базе которого Вы планируете поступать к нам:</span>
                <div  class="text-field__radio">
                    <div class="text-field__radio_item">
                        <input type = "radio" id = "school" name = "insType" value="Среднее общее образование (11 классов)" class="radio_custom">
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
            </div>
            <hr>
            <div class="text-field">
                <div>
                    <label for = "official_name" class="text-field__label">Введите название учебного заведения, в котором Вы обучаетесь на данный момент:</label>
                    <input type = "text" id = "official_name" name = "official_name" placeholder="ГБОУ Школа №000" class="text-field__input" required>
                </div>
            </div>
            <hr>
            <div class="text-field">
                <span class="text-field__label ">Откуда Вы узнали про наш День открытых дверей?</span>
                <div class="text-field__checkbox">
                    <div class="text-field__checkbox_item">
                        <input type = "checkbox" id = "friend" name = "inform" value="От друзей/знакомых/родственников" class="checkbox_custom">
                        <label for = "friend">От друзей/знакомых/родственников</label>
                    </div>

                    <div class="text-field__checkbox_item">
                        <input type = "checkbox" id = "social_network" name = "inform" value="Социальные сети" class="checkbox_custom">
                        <label for = "social_network">Социальные сети</label>
                    </div>

                    <div class="text-field__checkbox_item">
                        <input type = "checkbox" id = "Educ_portal" name = "inform" value="Образовательные порталы/выставки" class="checkbox_custom">
                        <label for = "Educ_portal">Образовательные порталы/выставки</label>
                    </div>

                    <div class="text-field__checkbox_item">
                        <input type = "checkbox" id = "pre-univer_train" name = "inform" value="Довузовская подготовка/курсы" class="checkbox_custom">
                        <label for = "pre-univer_train">Довузовская подготовка/курсы</label>
                    </div>

                    <div class="text-field__checkbox_item">
                        <input type = "checkbox" id = "contests" name = "inform" value="Довузовская подготовка/курсы" class="checkbox_custom">
                        <label for = "contests">Довузовская подготовка/курсы</label>
                    </div>

                    <div class="text-field__checkbox_item">
                        <input type = "checkbox" id = "excursion" name = "inform" value="Посещение учебного заведения представителями ВУЗа" class="checkbox_custom">
                        <label for = "excursion">Посещение учебного заведения представителями ВУЗа</label>
                    </div>
                    <!-- Прогуглить как сделать текстовый вид другого-->
                    <div class="text-field__checkbox_item">
                        <input type = "checkbox" id = "other_inform" name = "inform" class="checkbox_custom">
                        <label for = "other_inform">Другое</label>
                    </div>
                </div>
            </div>
            <hr>
            <div class="text-field">
                <div>
                    <label for = "direction" class="text-field__label">Какие направления обучения в НИУ "МЭИ" Вас интересуют? </label>
                    <input type = "text" id = "direction" name = "direction" class="text-field__input" required>
                </div>
            </div>
            <hr>
            <div class="text-field">
                <div>
                    <label for = "intresting" class="text-field__label">Что Вам было бы интересно увидеть/узнать на Дне открытых дверей МЭИ?</label>
                    <input type = "text" id = "intresting" name = "intresting" class="text-field__input">
                </div>
            </div>
            <hr>
            <div class="text-field">
                <div>
                    <label for = "question" class="text-field__label">Если у Вас есть вопросы к сотрудникам Приемной комиссии, в этом поле Вы можете их задать :) </label>
                    <input type = "text" id = "question" name = "question" class="text-field__input">
                </div>
            </div>
            <hr>
            <div class="text-field">
                <!-- как сделать чек бокс обязательным полем-->
                <span class="text-field__label">Откуда Вы узнали о нас (какое мероприятие посещали ранее)?</span>
                <div class="text-field__checkbox">
                    <div class="text-field__checkbox_item">
                        <input type="checkbox" id="portal_postypi_online" name="event" value="Портал &quotПоступи Онлайн&quot" class="checkbox_custom">
                        <label for="portal_postypi_online">Портал "Поступи Онлайн"</label>
                    </div>
                    
                    <div class="text-field__checkbox_item">
                        <input type="checkbox" id="portal_ucheba_ru" name="event" value="Портал &quotУчёба.ру&quot" class="checkbox_custom">
                        <label for="portal_ucheba_ru">Портал "Учёба.ру"</label>
                    </div>
                    
                    <div class="text-field__checkbox_item">                    
                        <input type="checkbox" id="portal_vuzopedia" name="event" value="Портал &quotВузопедия&quot" class="checkbox_custom">
                        <label for="portal_vuzopedia">Портал "Вузопедия"</label>
                    </div>
                    
                    <div class="text-field__checkbox_item">                    
                        <input type="checkbox" id="reclama_vk" name="event" value="Реклама в Вконтакте" class="checkbox_custom">
                        <label for="reclama_vk">Реклама в Вконтакте</label>
                    </div>
                    <div class="text-field__checkbox_item">
                        <input type="checkbox" id="reclama_yandex" name="event" value="Реклама в Яндекс" class="checkbox_custom">
                        <label for="reclama_yandex">Реклама в Яндекс"</label>
                    </div>
                    
                    <div class="text-field__checkbox_item">                    
                        <input type="checkbox" id="obraz_and_carier" name="event" value="Выставка &quotОбразование и карьера&quot" class="checkbox_custom">
                        <label for="obraz_and_carier">Выставка "Образование и карьера"</label>
                    </div>
                    
                    <div class="text-field__checkbox_item">                    
                        <input type="checkbox" id="navigator_postypleniya" name="event" value="Выставка &quotНавигатор поступления&quot" class="checkbox_custom">
                        <label for="navigator_postypleniya">Выставка "Навигатор поступления"</label>
                    </div>
                    
                    <div class="text-field__checkbox_item">                    
                        <input type="checkbox" id="excursion_MPEI" name="event" value="Экскурсия в НИУ &quotМЭИ&quot" class="checkbox_custom">
                        <label for="excursion_MPEI">Экскурсия в НИУ "МЭИ"</label>
                    </div>
                    
                    <div class="text-field__checkbox_item">
                        <input type="checkbox" id="olimpiada" name="event" value="Писал Олимпиаду школьников в НИУ &quotМЭИ&quot" class="checkbox_custom">
                        <label for="olimpiada">Писал Олимпиаду школьников в НИУ "МЭИ"</label>
                    </div>
                    
                    <div class="text-field__checkbox_item">                    
                        <input type="checkbox" id="conference" name="event" value="Участвовал в конференции &quotШаг в будущее&quot" class="checkbox_custom">
                        <label for="conference">Участвовал в конференции "Шаг в будущее"</label>
                    </div>
                    
                    <div class="text-field__checkbox_item">                    
                        <input type="checkbox" id="dod" name="event" value="Посетил День открытых дверей НИУ &quotМЭИ&quot" class="checkbox_custom">
                        <label for = "dod">Посетил День открытых дверей НИУ "МЭИ"</label>
                    </div>
                    
                    <!-- Прогуглить как сделать текстовый вид другого-->
                    <div>
                        <input type = "checkbox" id = "other_event" name = "event" value="other_event"  class="checkbox_custom">
                        <label for = "other_event">Другое</label>
                    </div>
                </div>
            </div>
            <hr>
            <div class="text-field">
                <span class="text-field__label">Согласие на обработку персональных данных:</span>
                <div  class="consent">
                    <img src="css/согласие.jpg" alt="согласие на обработку персональных данных">
                </div>
                <div class="text-field__checkbox_item">                                
                    <input type = "checkbox" id = "consent" name = "consent"  class="checkbox_custom" required>                                
                    <label for = "consent">Даю согласие на обработку персональных данных</label>
                </div>
            </div>

            <button class="form_button">Отправить</button>
        </form>
    </article>
@endsection