## Проект

Необходимо было создать собственную форму регистрации на мероприятия от Приемной комиссии МЭИ. В первую очередь регистрация на День Открытых дверей и сбор ответов. 
Фронт реализован через HTMl5, CSS3 и JS. Бек же написан с использованием фреймворка Laravel 8 и бд MySQL.

![image](https://github.com/rrrrr-neko/form-pk/assets/111903511/0011d054-b856-4562-b5dc-b13be530e85f)

## Описание готовых файлов

_Фронт_
**form_dod.blade.php** - шаблон HTML формы регистрации на ДОД (resources/views/form_dod.blade.php)

**form.blade.php** - шаблон HTML шапки и футера для формы регистрации на ДОД (resources/views/layouts/form.blade.php)

**base.css** - базовые стили CSS для всех страниц (resources/css/base.css)

**form_dod_2.css** - стили формы регистрации на ДОД (resources/css/form_dod_2.css)

**main.css** - стили для шапки и футера на страницах и главного контента (resources/css/main.css)

_Бек_
**AnswersDodController.php** - контроллер для обработки ответов из формы и записи их в БД (app/Http/Controller/AnswersDodController.php)

**AnswersDod.php** - модель для взаимодоействия с бд ответов из формы (app/Models/AnswersDod.php)

**create_answers_dod.php** - миграция для создания таблицы в базе данных (app/database/migrations/2024_04_18_122040_create_answers_dod.php)


