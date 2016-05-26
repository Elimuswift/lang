<?php

return [

    /*
    |---------------------------------------------------------------------------------------
    | Baris Bahasa untuk Validasi
    |---------------------------------------------------------------------------------------
    |
    | Baris bahasa berikut ini berisi standar pesan kesalahan yang digunakan oleh
    | kelas validasi. Beberapa aturan mempunyai multi versi seperti aturan 'size'.
    | Jangan ragu untuk mengoptimalkan setiap pesan yang ada di sini.
    |
    */

    'accepted'              => 'Isian :attribute harus diterima.',
    'active_url'            => 'Isian :attribute bukan URL yang valid.',
    'after'                 => 'Isian :attribute harus tanggal setelah :date.',
    'alpha'                 => 'Isian :attribute hanya boleh berisi huruf.',
    'alpha_dash'            => 'Isian :attribute hanya boleh berisi huruf, angka, dan strip.',
    'alpha_num'             => 'Isian :attribute hanya boleh berisi huruf dan angka.',
    'array'                 => 'Isian :attribute harus berupa sebuah array.',
    'before'                => 'Isian :attribute harus tanggal sebelum :date.',
    'between'               => [
        'array'     => 'Isian :attribute harus antara :min dan :max item.',
        'file'      => 'Isian :attribute harus antara :min dan :max kilobytes.',
        'numeric'   => 'Isian :attribute harus antara :min dan :max.',
        'string'    => 'Isian :attribute harus antara :min dan :max karakter.',
    ],
    'boolean'               => 'Isian :attribute harus berupa true atau false',
    'confirmed'             => 'Konfirmasi :attribute tidak cocok.',
    'date'                  => 'Isian :attribute bukan tanggal yang valid.',
    'date_format'           => 'Isian :attribute tidak cocok dengan format :format.',
    'different'             => 'Isian :attribute dan :other harus berbeda.',
    'digits'                => 'Isian :attribute harus berupa angka :digits.',
    'digits_between'        => 'Isian :attribute harus antara angka :min dan :max.',
    'email'                 => 'Isian :attribute harus berupa alamat surel yang valid.',
    'exists'                => 'Isian :attribute yang dipilih tidak valid.',
    'filled'                => 'Bidang isian :attribute wajib diisi.',
    'image'                 => 'Isian :attribute harus berupa gambar.',
    'in'                    => 'Isian :attribute yang dipilih tidak valid.',
    'integer'               => 'Isian :attribute harus merupakan bilangan bulat.',
    'ip'                    => 'Isian :attribute harus berupa alamat IP yang valid.',
    'json'                  => 'The :attribute must be a valid JSON string.',
    'max'                   => [
        'array'     => 'Isian :attribute seharusnya tidak lebih dari :max item.',
        'file'      => 'Isian :attribute seharusnya tidak lebih dari :max kilobytes.',
        'numeric'   => 'Isian :attribute seharusnya tidak lebih dari :max.',
        'string'    => 'Isian :attribute seharusnya tidak lebih dari :max karakter.',
    ],
    'mimes'                 => 'Isian :attribute harus dokumen berjenis : :values.',
    'min'                   => [
        'array'     => 'Isian :attribute harus minimal :min item.',
        'file'      => 'Isian :attribute harus minimal :min kilobytes.',
        'numeric'   => 'Isian :attribute harus minimal :min.',
        'string'    => 'Isian :attribute harus minimal :min karakter.',
    ],
    'not_in'                => 'Isian :attribute yang dipilih tidak valid.',
    'numeric'               => 'Isian :attribute harus berupa angka.',
    'regex'                 => 'Format isian :attribute tidak valid.',
    'required'              => 'Bidang isian :attribute wajib diisi.',
    'required_if'           => 'Bidang isian :attribute wajib diisi bila :other adalah :value.',
    'required_unless'       => 'The :attribute field is required unless :other is in :value.',
    'required_with'         => 'Bidang isian :attribute wajib diisi bila terdapat :values.',
    'required_with_all'     => 'Bidang isian :attribute wajib diisi bila terdapat :values.',
    'required_without'      => 'Bidang isian :attribute wajib diisi bila tidak terdapat :values.',
    'required_without_all'  => 'Bidang isian :attribute wajib diisi bila tidak terdapat ada :values.',
    'same'                  => 'Isian :attribute dan :other harus sama.',
    'size'                  => [
        'array'     => 'Isian :attribute harus mengandung :size item.',
        'file'      => 'Isian :attribute harus berukuran :size kilobyte.',
        'numeric'   => 'Isian :attribute harus berukuran :size.',
        'string'    => 'Isian :attribute harus berukuran :size karakter.',
    ],
    'string'                => 'Isian :attribute harus berupa string.',
    'timezone'              => 'Isian :attribute harus berupa zona waktu yang valid.',
    'unique'                => 'Isian :attribute sudah ada sebelumnya.',
    'url'                   => 'Format isian :attribute tidak valid.',

    /*
    |---------------------------------------------------------------------------------------
    | Baris Bahasa untuk Validasi Kustom
    |---------------------------------------------------------------------------------------
    |
    | Di sini Anda dapat menentukan pesan validasi kustom untuk atribut dengan menggunakan
    | konvensi "attribute.rule" dalam penamaan baris. Hal ini membuat cepat dalam
    | menentukan spesifik baris bahasa kustom untuk aturan atribut yang diberikan.
    |
    */

    'custom'    => [
        'attribute-name'    => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |---------------------------------------------------------------------------------------
    | Kustom Validasi Atribut
    |---------------------------------------------------------------------------------------
    |
    | Baris bahasa berikut digunakan untuk menukar atribut 'place-holders'
    | dengan sesuatu yang lebih bersahabat dengan pembaca seperti Alamat Surel daripada
    | "surel" saja. Ini benar-benar membantu kita membuat pesan sedikit bersih.
    |
    */

    'attributes'    => [],
];
