<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attribute повинен бути прийнятий.',
    'active_url' => ':attribute - це не дійсна URL-адреса.',
    'after' => ':attribute повинен бути датою після :date.',
    'after_or_equal' => ':attribute повинен бути датою після або дорівнює :date .',
    'alpha' => ':attribute повинен містити лише букви.',
    'alpha_dash' => ':attribute повинен містити лише букви, цифри, тире та підкреслення.',
    'alpha_num' => ':attribute повинен містити лише букви та цифри.',
    'array' => ':attribute повинен бути масивом.',
    'before' => ':attribute повинен бути датою до :date .',
    'before_or_equal' => ':attribute повинен бути датою до або дорівнює :date .',
    'between' => [
        'numeric' => ':attribute повинен бути між :min і :max.',
        'file' => ':attribute повинен бути між :min і :max кілобайтами.',
        'string' => ':attribute повинен бути між :min і :max символами.',
        'Array' => ':attribute повинен мати між :min і :max елементів.',
    ],
    'boolean' => 'Поле :attribute повинно бути true або false.',
    'confirmed' => 'Підтвердження :attribute не відповідає.',
    'date' => ':attribute - це не дійсна дата.',
    'date_equals' => ':attribute повинен бути датою, рівною :date.',
    'date_format' => ':attribute не відповідає формату :format.',
    'different' => ':attribute та :other повинні бути різними.',
    'digits' => ':attribute повинен бути :digits чисел.',
    'digits_between' => ':attribute повинен бути між :min і :max цифрами.',
    'dimensions' => ':attribute має недійсні розміри зображення.',
    'distinct' => 'Поле :attribute має дублікат значення.',
    'email' => ':attribute повинен бути дійсною адресою електронної пошти.',
    'ends_with' => ':attribute повинен закінчитися одним із наступних : :values.',
    'exists' => 'Вибраний :attribute недійсним.',
    'file' => ':attribute повинен бути файлом.',
    'filled' => 'Поле :attribute повинно мати значення.',
    
    'gt' => [
        'numeric' => ':attribute повинен бути більшим, ніж :value.',
        'file' => ':attribute повинен бути більшим, ніж :value кілобайт.',
        'string' => ':attribute повинен бути більшим, ніж :value символів.',
        'array' => ':attribute повинен мати більше :value елементів.',
    ],
    'gte' => [
        'numeric' => ':attribute повинен бути більшим або рівним :value.',
        'file' => ':attribute повинен бути більшим або рівним :value кілобайт.',
        'string' => ':attribute повинен бути більшим або рівним :value значення.',
        'array' => ':attribute повинен мати :value значення або більше.',
    ],
    'image' => ':attribute повинен бути зображенням.',
    'in' => 'Вибраний :attribute недійсний.',
    'in_array' => 'Поле :attribute не існує в: іншому.',
    'integer' => ':attribute повинен бути цілим числом.',
    'ip' => ':attribute повинен бути дійсною IP -адресою.',
    'ipv4' => ':attribute повинен бути дійсною адресою IPv4.',
    'ipv6' => ':attribute повинен бути дійсною адресою IPv6.',
    'json' => ':attribute повинен бути дійсним рядком json.',
    'lt' => [
        'numeric' => ':attribute повинен бути меншим, ніж :value.',
        'файл' => ':attribute повинен бути меншим, ніж :value кілобайт.',
        'String' => ':attribute повинен бути меншим, ніж :value значення.',
        'Array' => ':attribute повинен мати менше :value елементів.',
    ],
    'lte' => [
        'numeric' => ':attribute повинен бути меншим або рівним :value.',
        'file' => ':attribute повинен бути меншим або рівним :value кілобайт.',
        'string' => ':attribute повинен бути меншим або рівним :value значення.',
        'array' => ':attribute не повинен мати більше :value значення.',
    ],
    'max' => [
        'numeric' => ':attribute не повинен бути більшим, ніж :value.',
        'file' => ':attribute не повинен бути більшим, ніж :value кілобайт.',
        'string' => ':attribute не повинен бути більшим, ніж :value символи.',
        'array' => ':attribute не повинен мати більше :value елементів.',
    ],
    'mimes' => ':attribute повинен бути файлом типу: :values.',
    'mimetypes' => ':attribute повинен бути файлом типу: :values.',
    'min' => [
        'numeric' => ':attribute повинен бути принаймні :min.',
        'file' => ':attribute повинен бути принаймні :min кілобайт.',
        'string' => ':attribute повинен бути принаймні :min.',
        'array' => ':attribute повинен мати принаймні :min елементи.',
    ],
    'multive_of' => ':attribute повинен бути кратним :value.',
    'not_in' => 'Вибраний :attribute недійсним.',
    'not_regex' => 'Формат :attribute недійсний.',
    'numeric' => ':attribute повинен бути числом.',
    'password' => 'Пароль невірний.',
    'present' => 'Поле :attribute повинно бути присутнім.',
    'regex' => 'Формат :attribute недійсний.',
    'required' => 'Потрібне поле :attribute.',
    'required_if' => 'Поле :attribute потрібно, коли :other :value.',
    'required_unless' => 'Поле :attribute необхідне, якщо :other не входить :values.',
    'required_with' => 'Поле :attribute потрібно, коли :values присутні.',
    'required_with_all' => 'Поле: Поле :attribute необхідне, коли :values присутні.',
    'required_without' => 'Поле: Поле :attribute необхідне, коли :values немає.',
    'required_without_all' => 'Поле :attribute потрібно, коли жоден із значень: ',
    'prohibited' => 'Поле :attribute заборонено.',
    'prohibited_if' => 'Поле :attribute заборонено, коли :other :values.',
    'prohibited_unless' => 'Поле :attribute заборонено, якщо: :other значення :values.',
    'same' => ':attribute і :other повинні відповідати.',
    'size' => [
        'numeric' => ':attribute повинен бути :values.',
        'file' => ':attribute повинен бути :values кілобайт.',
        'string' => ':attribute повинен бути :values символів.',
        'array' => ':attribute повинен містити :values елементи.',
    ],
    'starts_with' => ':attribute повинен починатися з одного з наступних: :values.',
    'string' => ':attribute повинен бути рядок.',
    'timezone' => ':attribute повинен бути дійсною зоною.',
    'unique' => ':attribute вже взято.',
    'uploaded' => ':attribute не вдалося завантажити.',
    'url' => 'Формат :attribute недійсний.',
    'uuid' => ':attribute повинен бути дійсним uuid.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
