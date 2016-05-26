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

    'accepted'              => ':attribute باید پذیرفته شده باشد.',
    'active_url'            => 'آدرس :attribute معتبر نیست',
    'after'                 => ':attribute باید تاریخی بعد از :date باشد.',
    'alpha'                 => ':attribute باید شامل حروف الفبا باشد.',
    'alpha_dash'            => ':attribute باید شامل حروف الفبا و عدد و خظ تیره(-) باشد.',
    'alpha_num'             => ':attribute باید شامل حروف الفبا و عدد باشد.',
    'array'                 => ':attribute باید شامل آرایه باشد.',
    'before'                => ':attribute باید تاریخی قبل از :date باشد.',
    'between'               => [
        'array'     => ':attribute باید بین :min و :max آیتم باشد.',
        'file'      => ':attribute باید بین :min و :max کیلوبایت باشد.',
        'numeric'   => ':attribute باید بین :min و :max باشد.',
        'string'    => ':attribute باید بین :min و :max کاراکتر باشد.',
    ],
    'boolean'               => 'فیلد :attribute فقط میتواند صحیح و یا غلط باشد',
    'confirmed'             => ':attribute با تاییدیه مطابقت ندارد.',
    'date'                  => ':attribute یک تاریخ معتبر نیست.',
    'date_format'           => ':attribute با الگوی :format مطاقبت ندارد.',
    'different'             => ':attribute و :other باید متفاوت باشند.',
    'digits'                => ':attribute باید :digits رقم باشد.',
    'digits_between'        => ':attribute باید بین :min و :max رقم باشد.',
    'email'                 => 'فرمت :attribute معتبر نیست.',
    'exists'                => ':attribute انتخاب شده، معتبر نیست.',
    'filled'                => 'فیلد :attribute الزامی است',
    'image'                 => ':attribute باید تصویر باشد.',
    'in'                    => ':attribute انتخاب شده، معتبر نیست.',
    'integer'               => ':attribute باید نوع داده ای عددی (integer) باشد.',
    'ip'                    => ':attribute باید IP آدرس معتبر باشد.',
    'json'                  => 'The :attribute must be a valid JSON string.',
    'max'                   => [
        'array'     => ':attribute نباید بیشتر از :max آیتم باشد.',
        'file'      => ':attribute نباید بزرگتر از :max کیلوبایت باشد.',
        'numeric'   => ':attribute نباید بزرگتر از :max باشد.',
        'string'    => ':attribute نباید بیشتر از :max کاراکتر باشد.',
    ],
    'mimes'                 => ':attribute باید یکی از فرمت های :values باشد.',
    'min'                   => [
        'array'     => ':attribute نباید کمتر از :min آیتم باشد.',
        'file'      => ':attribute نباید کوچکتر از :min کیلوبایت باشد.',
        'numeric'   => ':attribute نباید کوچکتر از :min باشد.',
        'string'    => ':attribute نباید کمتر از :min کاراکتر باشد.',
    ],
    'not_in'                => ':attribute انتخاب شده، معتبر نیست.',
    'numeric'               => ':attribute باید شامل عدد باشد.',
    'regex'                 => ':attribute یک فرمت معتبر نیست',
    'required'              => 'فیلد :attribute الزامی است',
    'required_if'           => 'فیلد :attribute هنگامی که :other برابر با :value است، الزامیست.',
    'required_unless'       => 'The :attribute field is required unless :other is in :value.',
    'required_with'         => ':attribute الزامی است زمانی که :values موجود است.',
    'required_with_all'     => ':attribute الزامی است زمانی که :values موجود است.',
    'required_without'      => ':attribute الزامی است زمانی که :values موجود نیست.',
    'required_without_all'  => ':attribute الزامی است زمانی که :values موجود نیست.',
    'same'                  => ':attribute و :other باید مانند هم باشند.',
    'size'                  => [
        'array'     => ':attribute باسد شامل :size آیتم باشد.',
        'file'      => ':attribute باید برابر با :size کیلوبایت باشد.',
        'numeric'   => ':attribute باید برابر با :size باشد.',
        'string'    => ':attribute باید برابر با :size کاراکتر باشد.',
    ],
    'string'                => 'The :attribute must be a string.',
    'timezone'              => 'فیلد :attribute باید یک منطقه صحیح باشد.',
    'unique'                => ':attribute قبلا انتخاب شده است.',
    'url'                   => 'فرمت آدرس :attribute اشتباه است.',

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

    'custom'    => [],

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
        'address'               => 'نشانی',
        'age'                   => 'سن',
        'available'             => 'موجود',
        'city'                  => 'شهر',
        'content'               => 'محتوا',
        'country'               => 'کشور',
        'date'                  => 'تاریخ',
        'day'                   => 'روز',
        'description'           => 'توضیحات',
        'email'                 => 'پست الکترونیکی',
        'excerpt'               => 'گلچین کردن',
        'first_name'            => 'نام',
        'gender'                => 'جنسیت',
        'hour'                  => 'ساعت',
        'last_name'             => 'نام خانوادگی',
        'minute'                => 'دقیقه',
        'mobile'                => 'تلفن همراه',
        'month'                 => 'ماه',
        'name'                  => 'نام',
        'password'              => 'رمز عبور',
        'password_confirmation' => 'تاییدیه ی رمز عبور',
        'phone'                 => 'تلفن',
        'second'                => 'ثانیه',
        'sex'                   => 'جنسیت',
        'size'                  => 'اندازه',
        'text'                  => 'متن',
        'time'                  => 'زمان',
        'title'                 => 'عنوان',
        'username'              => 'نام کاربری',
        'year'                  => 'سال',
    ],
];
