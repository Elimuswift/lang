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

    'accepted'              => ':attribute must be accepted.',
    'active_url'            => ':attribute bukan URL yang sah.',
    'after'                 => ':attribute must be a date after :date.',
    'alpha'                 => ':attribute hanya boleh mengandungi huruf.',
    'alpha_dash'            => ':attribute boleh mengandungi huruf, nombor, dan sengkang.',
    'alpha_num'             => ':attribute boleh mengandungi huruf dan nombor.',
    'array'                 => ':attribute must be an array.',
    'before'                => ':attribute must be a date before :date.',
    'between'               => [
        'array'     => ':attribute mesti mengandungi antara :min dan :max perkara.',
        'file'      => ':attribute mesti mengandungi antara :min dan :max kilobait.',
        'numeric'   => ':attribute mesti mengandungi antara :min dan :max.',
        'string'    => ':attribute mesti mengandungi antara :min dan :max aksara.',
    ],
    'boolean'               => ':attribute field must be true or false.',
    'confirmed'             => ':attribute confirmation does not match.',
    'date'                  => ':attribute bukan tarikh yang sah.',
    'date_format'           => ':attribute does not match the format :format.',
    'different'             => ':attribute dan :other must be different.',
    'digits'                => ':attribute must be :digits digits.',
    'digits_between'        => ':attribute mesti mengandungi antara :min dan :max digits.',
    'email'                 => ':attribute must be a valid email address.',
    'exists'                => 'The selected :attribute is invalid.',
    'filled'                => ':attribute field is required.',
    'image'                 => ':attribute must be an image.',
    'in'                    => 'The selected :attribute is invalid.',
    'integer'               => ':attribute must be an integer.',
    'ip'                    => ':attribute must be a valid IP address.',
    'json'                  => ':attribute must be a valid JSON string.',
    'max'                   => [
        'array'     => ':attribute may not have more than :max perkara.',
        'file'      => ':attribute may not be greater than :max kilobait.',
        'numeric'   => ':attribute may not be greater than :max.',
        'string'    => ':attribute may not be greater than :max aksara.',
    ],
    'mimes'                 => ':attribute must be a file of type: :values.',
    'min'                   => [
        'array'     => ':attribute must have at least :min perkara.',
        'file'      => ':attribute must be at least :min kilobait.',
        'numeric'   => ':attribute must be at least :min.',
        'string'    => ':attribute must be at least :min aksara.',
    ],
    'not_in'                => 'The selected :attribute is invalid.',
    'numeric'               => ':attribute must be a number.',
    'regex'                 => ':attribute format is invalid.',
    'required'              => ':attribute field is required.',
    'required_if'           => ':attribute field is required when :other is :value.',
    'required_unless'       => 'The :attribute field is required unless :other is in :value.',
    'required_with'         => ':attribute field is required when :values is present.',
    'required_with_all'     => ':attribute field is required when :values is present.',
    'required_without'      => ':attribute field is required when :values is not present.',
    'required_without_all'  => ':attribute field is required when none of :values are present.',
    'same'                  => ':attribute dan :other must match.',
    'size'                  => [
        'array'     => ':attribute must contain :size perkara.',
        'file'      => ':attribute must be :size kilobait.',
        'numeric'   => ':attribute must be :size.',
        'string'    => ':attribute must be :size aksara.',
    ],
    'string'                => ':attribute must be a string.',
    'timezone'              => ':attribute must be a valid zone.',
    'unique'                => ':attribute has already been taken.',
    'url'                   => ':attribute format is invalid.',

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
