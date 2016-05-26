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
    'accepted'              => ':attribute depet èssere atzetadu.',
    'active_url'            => ':attribute no est un\'URL bàlidu.',
    'after'                 => ':attribute depet èssere una data chi benit a pustis de :date.',
    'alpha'                 => ':attribute podet cuntènnere isceti lìteras.',
    'alpha_dash'            => ':attribute podet cuntènnere isceti lìteras, nùmeros e tratigheddos.',
    'alpha_num'             => ':attribute podet cuntènnere isceti lìteras e nùmeros.',
    'array'                 => ':attribute depet èssere un\'array.',
    'before'                => ':attribute depet èssere una data chi benit prima de :date.',
    'between'               => [
        'array'     => ':attribute depet èssere intre :min - :max elementos.',
        'file'      => ':attribute depet èssere intre :min - :max kilobytes.',
        'numeric'   => ':attribute depet èssere intre :min - :max.',
        'string'    => ':attribute depet èssere intre :min - :max caràteres.',
    ],
    'boolean'               => 'The :attribute field must be true or false',
    'confirmed'             => 'Su campu de cunfirma pro :attribute non torrat.',
    'date'                  => ':attribute no est una data bàlida.',
    'date_format'           => ':attribute non torrat cun su formadu :format.',
    'different'             => ':attribute e :other depent èssere diferentes.',
    'digits'                => ':attribute depet èssere de :digits tzifras.',
    'digits_between'        => ':attribute depet èssere intre :min e :max tzifras.',
    'email'                 => ':attribute no est bàlidu.',
    'exists'                => ':attribute seberadu/a no est bàlidu.',
    'filled'                => ':attribute est pedidu.',
    'image'                 => ':attribute depet èssere un\'immàgine.',
    'in'                    => ':attribute seberadu no est bàlidu.',
    'integer'               => ':attribute depet èssere intreu.',
    'ip'                    => ':attribute depet èssere un\'indiritzu IP bàlidu.',
    'json'                  => 'The :attribute must be a valid JSON string.',
    'max'                   => [
        'array'     => ':attribute non podet tènnere prus de :max elementos.',
        'file'      => ':attribute non depet èssere prus mannu de :max kilobytes.',
        'numeric'   => ':attribute depet èssere prus piticu de :max.',
        'string'    => ':attribute non podet cuntènnere prus de :max caràteres.',
    ],
    'mimes'                 => ':attribute depet èssere de tipu: :values.',
    'min'                   => [
        'array'     => ':attribute depet tènnere a su mancu :min elementos.',
        'file'      => ':attribute depet èssere prus mannu de :min kilobytes.',
        'numeric'   => ':attribute depet bàlere a su mancu :min.',
        'string'    => ':attribute depet cuntènnere a su mancu :min caràteres.',
    ],
    'not_in'                => 'Su balore seberadu pro :attribute no est bàlidu.',
    'numeric'               => ':attribute depet èssere unu nùmeru.',
    'regex'                 => 'Su formadu de su campu :attribute no est bàlidu.',
    'required'              => ':attribute est pedidu.',
    'required_if'           => 'Su campu :attribute est pedidu cando :other est :value.',
    'required_unless'       => 'The :attribute field is required unless :other is in :value.',
    'required_with'         => 'Su campu :attribute est pedidu cando :values est presente.',
    'required_with_all'     => 'Su campu:attribute est pedidu cando :values est presente.',
    'required_without'      => 'Su campu :attribute est pedidu cando :values no est presente.',
    'required_without_all'  => 'Su campu :attribute est pedidu cando perunu de :values sunt presentes.',
    'same'                  => ':attribute e :other depent èssere uguales.',
    'size'                  => [
        'array'     => ':attribute depet cuntènnere :size elementos.',
        'file'      => ':attribute depet èssere mannu :size kilobytes.',
        'numeric'   => ':attribute depet bàlere :size.',
        'string'    => ':attribute depet cuntènnere :size caràteres.',
    ],
    'string'                => 'The :attribute must be a string.',
    'timezone'              => ':attribute depet èssere una zona bàlida.',
    'unique'                => ':attribute est istadu giai impreadu.',
    'url'                   => ':attribute depet èssere un\'URL.',

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
