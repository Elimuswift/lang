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

    'accepted'              => 'Reiturinn :attribute verður að vera samþykktur.',
    'active_url'            => 'Reiturinn :attribute er ekki leyfileg vefslóð.',
    'after'                 => 'Reiturinn :attribute verður að vera dagsetning eftir :date.',
    'alpha'                 => 'Reiturinn :attribute má aðeins innihalda bókstafi.',
    'alpha_dash'            => 'Reiturinn :attribute má aðeins innihalda bókstafi, tölur og undirstikanir.',
    'alpha_num'             => 'Reiturinn :attribute má aðeins innihalda bókstafi og tölur.',
    'array'                 => 'Reiturinn :attribute verður að vera fylki.',
    'before'                => 'Reiturinn :attribute verður að vera dagsetning eftir :date.',
    'between'               => [
        'array'     => 'Reiturinn :attribute verður að vera á milli :min - :max staka.',
        'file'      => 'Reiturinn :attribute verður að vera á milli :min - :max kílóbæta.',
        'numeric'   => 'Reiturinn :attribute verður að vera á milli :min - :max.',
        'string'    => 'Reiturinn :attribute verður að vera á milli :min - :max stafa.',
    ],
    'boolean'               => 'Reiturinn :attribute verður að vera réttur eða rangur.',
    'confirmed'             => 'Staðfesting á reitnum :attribute passar ekki.',
    'date'                  => 'Reiturinn :attribute er ekki rétt dagsetning.',
    'date_format'           => 'Reiturinn :attribute passar ekki við :format.',
    'different'             => 'Reiturinn :attribute og :other verða að vera ólíkir.',
    'digits'                => 'Reiturinn :attribute verður að vera :digits tölustafir.',
    'digits_between'        => 'Reiturinn :attribute verður að vera á milli :min og :max tölustafa.',
    'email'                 => 'Reiturinn :attribute snið netfangsins er ekki rétt.',
    'exists'                => 'Reiturinn :attribute er nú þegar til.',
    'filled'                => 'Reiturinn :attribute verður að innihalda eitthvað.',
    'image'                 => 'Reiturinn :attribute verður að vera mynd.',
    'in'                    => 'Reiturinn :attribute er ekki réttur.',
    'integer'               => 'Reiturinn :attribute verður að vera tala.',
    'ip'                    => 'Reiturinn :attribute verður að vera lögleg IP-tala.',
    'json'                  => 'The :attribute must be a valid JSON string.',
    'max'                   => [
        'array'     => 'Reiturinn :attribute verður að innihalda færri en :max stök.',
        'file'      => 'Reiturinn :attribute verður að vera minni en :max kílóbæt.',
        'numeric'   => 'Reiturinn :attribute verður að innihalda færri stafi en :max.',
        'string'    => 'Reiturinn :attribute verður að innihalda færri en :max stafi.',
    ],
    'mimes'                 => 'Reiturinn :attribute verður að vera skrá af gerðinni: :values.',
    'min'                   => [
        'array'     => 'Reiturinn :attribute verður að vera að lágmarki :min stök.',
        'file'      => 'Reiturinn :attribute verður að vera að lágmarki :min kílóbæt.',
        'numeric'   => 'Reiturinn :attribute verður að vera að lágmarki :min tölustafir.',
        'string'    => 'Reiturinn :attribute verður að vera að lágmarki :min stafir.',
    ],
    'not_in'                => 'Reiturinn :attribute er ógildur.',
    'numeric'               => 'Reiturinn :attribute verður að vera tala.',
    'regex'                 => 'Reiturinn :attribute er ekki á réttu formi.',
    'required'              => 'Reiturinn :attribute er nauðsynlegur.',
    'required_if'           => 'Reiturinn :attribute er nauðsynlegur þegar :other er :value.',
    'required_unless'       => 'The :attribute field is required unless :other is in :value.',
    'required_with'         => 'The :attribute field is required when :values is present.',
    'required_with_all'     => 'The :attribute field is required when :values is present.',
    'required_without'      => 'The :attribute field is required when :values is not present.',
    'required_without_all'  => 'The :attribute field is required when none of :values are present.',
    'same'                  => 'Reiturinn :attribute og :other verða að stemma.',
    'size'                  => [
        'array'     => 'Reiturinn :attribute verður að innihalda :size hluti.',
        'file'      => 'Reiturinn :attribute verður að vera :size kílóbæt.',
        'numeric'   => 'Reiturinn :attribute verður að vera :size.',
        'string'    => 'Reiturinn :attribute verður að vera :size stafir.',
    ],
    'string'                => 'The :attribute must be a string.',
    'timezone'              => 'Reiturinn :attribute verður að vera rétt tímabelti.',
    'unique'                => 'Reiturinn :attribute er því miður ekki leyfilegur. Það er annar eins.',
    'url'                   => 'Reiturinn :attribute verður að vera netslóð.',

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

    'custom'    => [
        'attribute-name'    => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes'    => [
        'address'               => 'Heimilisfang',
        'age'                   => 'Aldur',
        'available'             => 'Í boði',
        'city'                  => 'Borg',
        'content'               => 'Efni',
        'country'               => 'Land',
        'date'                  => 'Dagsetning',
        'day'                   => 'Dagur',
        'description'           => 'Lýsing',
        'email'                 => 'Netfang',
        'excerpt'               => 'Excerpt',
        'first_name'            => 'Fornafn',
        'gender'                => 'Kyn',
        'hour'                  => 'Klukkutími',
        'last_name'             => 'Eftirnafn',
        'minute'                => 'Mínúta',
        'mobile'                => 'Farsími',
        'month'                 => 'Mánuður',
        'name'                  => 'Nafn',
        'password'              => 'Lykilorð',
        'password_confirmation' => 'Staðfesting á lykilorði',
        'phone'                 => 'Heimasími',
        'second'                => 'Sekúnda',
        'sex'                   => 'Sex',
        'size'                  => 'Stærð',
        'time'                  => 'Tími',
        'title'                 => 'Titill',
        'username'              => 'Notendanafn',
        'year'                  => 'Ár',
    ],
];
