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

    'accepted'              => ':attribute mora biti sprejet.',
    'active_url'            => ':attribute ni pravilen.',
    'after'                 => ':attribute mora biti za datumom :date.',
    'alpha'                 => ':attribute lahko vsebuje samo črke.',
    'alpha_dash'            => ':attribute lahko vsebuje samo črke, številke in črtice.',
    'alpha_num'             => ':attribute lahko vsebuje samo črke in številke.',
    'array'                 => ':attribute mora biti polje.',
    'before'                => ':attribute mora biti pred datumom :date.',
    'between'               => [
        'array'     => ':attribute mora imeti med :min in :max elementov.',
        'file'      => ':attribute mora biti med :min in :max kilobajti.',
        'numeric'   => ':attribute mora biti med :min in :max.',
        'string'    => ':attribute mora biti med :min in :max znaki.',
    ],
    'boolean'               => ':attribute polje mora biti 1 ali 0',
    'confirmed'             => ':attribute potrditev se ne ujema.',
    'date'                  => ':attribute ni veljaven datum.',
    'date_format'           => ':attribute se ne ujema z obliko :format.',
    'different'             => ':attribute in :other mora biti drugačen.',
    'digits'                => ':attribute mora imeti :digits cifer.',
    'digits_between'        => ':attribute mora biti med :min in :max ciframi.',
    'email'                 => ':attribute mora biti veljaven e-poštni naslov.',
    'exists'                => 'izbran :attribute je neveljaven.',
    'image'                 => ':attribute mora biti slika.',
    'in'                    => 'izbran :attribute je neveljaven.',
    'integer'               => ':attribute mora biti število.',
    'ip'                    => ':attribute mora biti veljaven IP naslov.',
    'json'                  => 'The :attribute must be a valid JSON string.',
    'max'                   => [
        'array'     => ':attribute ne smejo imeti več kot :max elementov.',
        'file'      => ':attribute ne sme biti večje :max kilobajtov.',
        'numeric'   => ':attribute ne sme biti večje od :max.',
        'string'    => ':attribute ne sme biti večje :max znakov.',
    ],
    'mimes'                 => ':attribute mora biti datoteka tipa: :values.',
    'min'                   => [
        'array'     => ':attribute mora imeti vsaj :min elementov.',
        'file'      => ':attribute mora imeti vsaj :min kilobajtov.',
        'numeric'   => ':attribute mora biti vsaj dolžine :min.',
        'string'    => ':attribute mora imeti vsaj :min znakov.',
    ],
    'not_in'                => 'izbran :attribute je neveljaven.',
    'numeric'               => ':attribute mora biti število.',
    'regex'                 => 'Format polja :attribute je neveljaven.',
    'required'              => 'Polje :attribute je zahtevano.',
    'required_if'           => 'Polje :attribute je zahtevano, ko :other je :value.',
    'required_unless'       => 'The :attribute field is required unless :other is in :value.',
    'required_with'         => 'Polje :attribute je zahtevano, ko je :values prisoten.',
    'required_with_all'     => 'Polje :attribute je zahtevano, ko je :values prisoten.',
    'required_without'      => 'Polje :attribute je zahtevano, ko :values ni prisoten.',
    'required_without_all'  => 'Polje :attribute je zahtevano, ko nobenih od :values niso prisotni.',
    'same'                  => 'Polje :attribute in :other se morata ujemati.',
    'size'                  => [
        'array'     => ':attribute mora vsebovati :size elementov.',
        'file'      => ':attribute mora biti :size kilobajtov.',
        'numeric'   => ':attribute mora biti :size.',
        'string'    => ':attribute mora biti :size znakov.',
    ],
    'string'                => 'The :attribute must be a string.',
    'timezone'              => 'The :attribute must be a valid zone.',
    'unique'                => ':attribute je že zaseden.',
    'url'                   => ':attribute format je neveljaven.',

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
