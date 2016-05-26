<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | such as the size rules. Feel free to tweak each of these messages.
    |
    */
    'accepted'              => 'Polje :attribute mora biti prihvaćeno.',
    'active_url'            => 'Polje :attribute nije ispravan URL.',
    'after'                 => 'Polje :attribute mora biti datum nakon :date.',
    'alpha'                 => 'Polje :attribute smije sadržavati samo slova.',
    'alpha_dash'            => 'Polje :attribute smije sadržavati samo slova, brojeve i crtice.',
    'alpha_num'             => 'Polje :attribute smije sadržavati samo slova i brojeve.',
    'array'                 => 'Polje :attribute mora biti niz.',
    'before'                => 'Polje :attribute mora biti datum prije :date.',
    'between'               => [
        'array'     => 'Polje :attribute mora imati između :min - :max stavki.',
        'file'      => 'Polje :attribute mora biti između :min - :max kilobajta.',
        'numeric'   => 'Polje :attribute mora biti između :min - :max.',
        'string'    => 'Polje :attribute mora biti između :min - :max znakova.',
    ],
    'boolean'               => 'Polje :attribute mora biti false ili true.',
    'confirmed'             => 'Potvrda polja :attribute se ne podudara.',
    'date'                  => 'Polje :attribute nije ispravan datum.',
    'date_format'           => 'Polje :attribute ne podudara s formatom :format.',
    'different'             => 'Polja :attribute i :other moraju biti različita.',
    'digits'                => 'Polje :attribute mora sadržavati :digits znamenki.',
    'digits_between'        => 'Polje :attribute mora imati između :min i :max znamenki.',
    'email'                 => 'Polje :attribute mora biti ispravna e-mail adresa.',
    'exists'                => 'Odabrano polje :attribute nije ispravno.',
    'image'                 => 'Polje :attribute mora biti slika.',
    'in'                    => 'Odabrano polje :attribute nije ispravno.',
    'integer'               => 'Polje :attribute mora biti broj.',
    'ip'                    => 'Polje :attribute mora biti ispravna IP adresa.',
    'json'                  => 'The :attribute must be a valid JSON string.',
    'max'                   => [
        'array'     => 'Polje :attribute ne smije imati više od :max stavki.',
        'file'      => 'Polje :attribute mora biti manje od :max kilobajta.',
        'numeric'   => 'Polje :attribute mora biti manje od :max.',
        'string'    => 'Polje :attribute mora sadržavati manje od :max znakova.',
    ],
    'mimes'                 => 'Polje :attribute mora biti datoteka tipa: :values.',
    'min'                   => [
        'array'     => 'Polje :attribute mora sadržavati najmanje :min stavki.',
        'file'      => 'Polje :attribute mora biti najmanje :min kilobajta.',
        'numeric'   => 'Polje :attribute mora biti najmanje :min.',
        'string'    => 'Polje :attribute mora sadržavati najmanje :min znakova.',
    ],
    'not_in'                => 'Odabrano polje :attribute nije ispravno.',
    'numeric'               => 'Polje :attribute mora biti broj.',
    'regex'                 => 'Polje :attribute se ne podudara s formatom.',
    'required'              => 'Polje :attribute je obavezno.',
    'required_if'           => 'Polje :attribute je obavezno kada polje :other sadrži :value.',
    'required_unless'       => 'The :attribute field is required unless :other is in :value.',
    'required_with'         => 'Polje :attribute je obavezno kada postoji polje :values.',
    'required_with_all'     => 'Polje :attribute je obavezno kada postje polja :values.',
    'required_without'      => 'Polje :attribute je obavezno kada ne postoji polje :values.',
    'required_without_all'  => 'Polje :attribute je obavezno kada nijedno od polja :values ne postoji.',
    'same'                  => 'Polja :attribute i :other se moraju podudarati.',
    'size'                  => [
        'array'     => 'Polje :attribute mora sadržavati :size stavki.',
        'file'      => 'Polje :attribute mora biti :size kilobajta.',
        'numeric'   => 'Polje :attribute mora biti :size.',
        'string'    => 'Polje :attribute mora biti :size znakova.',
    ],
    'string'                => 'The :attribute must be a string.',
    'timezone'              => 'Polje :attribute mora biti ispravna vremenska zona.',
    'unique'                => 'Polje :attribute već postoji.',
    'url'                   => 'Polje :attribute nije ispravnog formata.',

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

    'attributes'    => [],
];
