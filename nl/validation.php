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

    'accepted'              => ':attribute moet geaccepteerd zijn.',
    'active_url'            => ':attribute is geen geldige URL.',
    'after'                 => ':attribute moet een datum na :date zijn.',
    'alpha'                 => ':attribute mag alleen letters bevatten.',
    'alpha_dash'            => ':attribute mag alleen letters, nummers, onderstreep(_) en strepen(-) bevatten.',
    'alpha_num'             => ':attribute mag alleen letters en nummers bevatten.',
    'array'                 => ':attribute moet geselecteerde elementen bevatten.',
    'before'                => ':attribute moet een datum voor :date zijn.',
    'between'               => [
        'array'     => ':attribute moet tussen :min en :max items bevatten.',
        'file'      => ':attribute moet tussen :min en :max kilobytes zijn.',
        'numeric'   => ':attribute moet tussen :min en :max zijn.',
        'string'    => ':attribute moet tussen :min en :max karakters zijn.',
    ],
    'boolean'               => ':attribute moet true of false zijn.',
    'confirmed'             => ':attribute bevestiging komt niet overeen.',
    'date'                  => ':attribute moet een datum bevatten.',
    'date_format'           => ':attribute moet een geldig datum formaat bevatten.',
    'different'             => ':attribute en :other moeten verschillend zijn.',
    'digits'                => ':attribute moet bestaan uit :digits cijfers.',
    'digits_between'        => ':attribute moet bestaan uit minimaal :min en maximaal :max cijfers.',
    'email'                 => ':attribute is geen geldig e-mailadres.',
    'exists'                => ':attribute bestaat niet.',
    'filled'                => ':attribute is verplicht.',
    'image'                 => ':attribute moet een afbeelding zijn.',
    'in'                    => ':attribute is ongeldig.',
    'integer'               => ':attribute moet een getal zijn.',
    'ip'                    => ':attribute moet een geldig IP-adres zijn.',
    'json'                  => 'The :attribute must be a valid JSON string.',
    'max'                   => [
        'array'     => ':attribute mag niet meer dan :max items bevatten.',
        'file'      => ':attribute mag niet meer dan :max kilobytes zijn.',
        'numeric'   => ':attribute mag niet hoger dan :max zijn.',
        'string'    => ':attribute mag niet uit meer dan :max karakters bestaan.',
    ],
    'mimes'                 => ':attribute moet een bestand zijn van het bestandstype :values.',
    'min'                   => [
        'array'     => ':attribute moet minimaal :min items bevatten.',
        'file'      => ':attribute moet minimaal :min kilobytes zijn.',
        'numeric'   => ':attribute moet minimaal :min zijn.',
        'string'    => ':attribute moet minimaal :min karakters zijn.',
    ],
    'not_in'                => 'Het formaat van :attribute is ongeldig.',
    'numeric'               => ':attribute moet een nummer zijn.',
    'regex'                 => ':attribute formaat is ongeldig.',
    'required'              => ':attribute is verplicht.',
    'required_if'           => ':attribute is verplicht indien :other gelijk is aan :value.',
    'required_unless'       => 'The :attribute field is required unless :other is in :value.',
    'required_with'         => ':attribute is verplicht i.c.m. :values',
    'required_with_all'     => ':attribute is verplicht i.c.m. :values',
    'required_without'      => ':attribute is verplicht als :values niet ingevuld is.',
    'required_without_all'  => ':attribute is verplicht als :values niet ingevuld zijn.',
    'same'                  => ':attribute en :other moeten overeenkomen.',
    'size'                  => [
        'array'     => ':attribute moet :size items bevatten.',
        'file'      => ':attribute moet :size kilobyte zijn.',
        'numeric'   => ':attribute moet :size zijn.',
        'string'    => ':attribute moet :size karakters zijn.',
    ],
    'string'                => 'Het :attribute moet een tekenreeks zijn.',
    'timezone'              => 'Het :attribute moet een geldige zone zijn.',
    'unique'                => ':attribute is al in gebruik.',
    'url'                   => ':attribute is geen geldige URL.',

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
