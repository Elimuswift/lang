<?php

return [

    /**
     *
     * Shared translations.
     *
     */
    'back'      => 'Önceki Adım',
    'finish'    => 'Kur',
    'forms'     => [
        'errorTitle'    => 'Hatalar tespit edildi :',
    ],
    'next'      => 'Sonraki Adım',
    'title'     => 'Kurulum',

    /**
     *
     * Home page translations.
     *
     */
    'welcome'   => [
        'message'       => 'Kolay Kurulum Sihirbazı.',
        'next'          => 'Gereksinimleri Denetle',
        'templateTitle' => 'Kurulum\'a Hoşgeldiniz',
        'title'         => 'Kurulum',
    ],

    /**
     *
     * Requirements page translations.
     *
     */
    'requirements'  => [
        'next'          => 'İzinleri Kontrol Et',
        'templateTitle' => 'Adım 1 | Sunucu Gereksinimleri',
        'title'         => 'Sunucu Gereksinimleri',
    ],

    /**
     *
     * Permissions page translations.
     *
     */
    'permissions'   => [
        'next'          => 'Ortam ayarlarına geç',
        'templateTitle' => 'Adım 2 | İzinler',
        'title'         => 'İzinler',
    ],

    /**
     *
     * Environment page translations.
     *
     */
    'environment'   => [
        'classic'   => [
            'back'          => 'Form Sihirbazını Kullan',
            'install'       => 'Yükle',
            'save'          => 'Kaydet (.env)',
            'templateTitle' => '3. Adım | Ortam Ayarları | Klasik Editör',
            'title'         => 'Klasik Metin Editörü',
        ],
        'errors'    => '.env dosyasını kaydedemiyoruz, lütfen el ile oluşturun.',
        'menu'      => [
            'classic-button'    => 'Klasik Metin Editörü',
            'desc'              => 'Lütfen uygulamanın <code> .env </code> dosyasını nasıl yapılandıracağınızı seçin.',
            'templateTitle'     => 'Adım 3 | Ortam Ayarları',
            'title'             => 'Ortam Ayarları',
            'wizard-button'     => 'Form Sihirbazı Kurulumu',
        ],
        'success'   => '.env dosyası ayarları kaydedildi.',
        'wizard'    => [
            'form'          => [
                'app_debug_label'                       => 'Uygulama Hataları Gösterme',
                'app_debug_label_false'                 => 'Pasif',
                'app_debug_label_true'                  => 'Aktif',
                'app_environment_label'                 => 'Uygulama Ortamı',
                'app_environment_label_developement'    => 'Geliştirme',
                'app_environment_label_local'           => 'Yerel',
                'app_environment_label_other'           => 'Diğer',
                'app_environment_label_production'      => 'Üretim',
                'app_environment_label_qa'              => 'qa',
                'app_environment_placeholder_other'     => 'Çevrenizi girin ...',
                'app_log_level_label'                   => 'Uygulama Günlüğü Düzeyi',
                'app_log_level_label_alert'             => 'uyarı',
                'app_log_level_label_critical'          => 'kritik',
                'app_log_level_label_debug'             => 'hata ayıklama',
                'app_log_level_label_emergency'         => 'acil durum',
                'app_log_level_label_error'             => 'hata',
                'app_log_level_label_info'              => 'bilgi',
                'app_log_level_label_notice'            => 'haber',
                'app_log_level_label_warning'           => 'uyarı',
                'app_name_label'                        => 'Uygulama Adı',
                'app_name_placeholder'                  => 'Uygulama Adı',
                'app_tabs'                              => [
                    'broadcasting_label'            => 'Yayıncı Sürücüsü',
                    'broadcasting_placeholder'      => 'Yayıncı Sürücüsü',
                    'broadcasting_title'            => 'Yayıncılık, Önbellekleme, Oturum &amp; Kuyruk',
                    'cache_label'                   => 'Önbellek Sürücüsü',
                    'cache_placeholder'             => 'Önbellek Sürücüsü',
                    'mail_driver_label'             => 'Posta Sürücüsü',
                    'mail_driver_placeholder'       => 'Posta Sürücüsü',
                    'mail_encryption_label'         => 'Posta Güvenlik Türü',
                    'mail_encryption_placeholder'   => 'Posta Güvenlik Türü',
                    'mail_host_label'               => 'Posta Sunucusu',
                    'mail_host_placeholder'         => 'Posta Sunucusu',
                    'mail_label'                    => 'Mail',
                    'mail_password_label'           => 'Posta Parolası',
                    'mail_password_placeholder'     => 'Posta Parolası',
                    'mail_port_label'               => 'Posta Bağlantı Noktası',
                    'mail_port_placeholder'         => 'Posta Bağlantı Noktası',
                    'mail_username_label'           => 'Posta Kullanıcı Adı',
                    'mail_username_placeholder'     => 'Posta Kullanıcı Adı',
                    'more_info'                     => 'Daha Fazla Bilgi',
                    'pusher_app_id_label'           => 'İtici Uygulama Kimliği',
                    'pusher_app_id_palceholder'     => 'İtici Uygulama Kimliği',
                    'pusher_app_key_label'          => 'İtici Uygulama Anahtarı',
                    'pusher_app_key_palceholder'    => 'İtici Uygulama Anahtarı',
                    'pusher_app_secret_label'       => 'Pusher App Secret',
                    'pusher_app_secret_palceholder' => 'Pusher App Secret',
                    'pusher_label'                  => 'Pusher',
                    'queue_label'                   => 'Kuyruk Sürücüsü',
                    'queue_placeholder'             => 'Kuyruk Sürücüsü',
                    'redis_host'                    => 'Redis Host',
                    'redis_label'                   => 'Redis Sürücüsü',
                    'redis_password'                => 'Redis Şifre',
                    'redis_port'                    => 'Redis Port',
                    'session_label'                 => 'Oturum Sürücüsü',
                    'session_placeholder'           => 'Oturum Sürücüsü',
                ],
                'app_url_label'                         => 'Uygulama URL\'si',
                'app_url_placeholder'                   => 'Uygulama URL\'si',
                'buttons'                               => [
                    'install'           => 'Yükle',
                    'setup_application' => 'Uygulama Ayarları',
                    'setup_database'    => 'Veritabanı Ayarları',
                ],
                'db_connection_label'                   => 'Veritabanı Bağlantısı',
                'db_connection_label_mysql'             => 'mysql',
                'db_connection_label_pgsql'             => 'pgsql',
                'db_connection_label_sqlite'            => 'sqlite',
                'db_connection_label_sqlsrv'            => 'sqlsrv',
                'db_host_label'                         => 'Veritabanı Sunucusu',
                'db_host_placeholder'                   => 'Veritabanı Sunucusu',
                'db_name_label'                         => 'Veritabanı Adı',
                'db_name_placeholder'                   => 'Veritabanı Adı',
                'db_password_label'                     => 'Veritabanı Şifresi',
                'db_password_placeholder'               => 'Veritabanı Şifresi',
                'db_port_label'                         => 'Veritabanı Bağlantı Noktası',
                'db_port_placeholder'                   => 'Veritabanı Bağlantı Noktası',
                'db_username_label'                     => 'Veritabanı Kullanıcı Adı',
                'db_username_placeholder'               => 'Veritabanı Kullanıcı Adı',
                'name_required'                         => 'Bir ortam adı gerekiyor.',
            ],
            'tabs'          => [
                'application'   => 'Uygulama',
                'database'      => 'Veritabanı',
                'environment'   => 'Ortam',
            ],
            'templateTitle' => 'Adım 3 | Ortam Ayarları | Form sihirbazı',
            'title'         => 'Guided <code>.env</code> Wizard',
        ],
    ],
    'install'       => 'Kurulum',

    /**
     *
     * Installed Log translations.
     *
     */
    'installed' => [
        'success_log_message'   => 'Uygulama başarıyla KURULDU',
    ],

    /**
     *
     * Final page translations.
     *
     */
    'final' => [
        'console'       => 'Uygulama Konsolu Çıktısı:',
        'env'           => 'Son .env Dosyası:',
        'exit'          => 'Çıkmak için burayı tıklayın',
        'finished'      => 'Uygulama başarıyla kuruldu.',
        'log'           => 'Kurulum Günlüğü Girişi:',
        'migration'     => 'Veritabanı  Konsolu Çıktısı:',
        'templateTitle' => 'Kurulum Bitti',
        'title'         => 'Kurulum Bitti',
    ],

    /**
     *
     * Update specific translations
     *
     */
    'updater'   => [
        'final'     => [
            'exit'      => 'Çıkmak ve uygulamayı başlatmak için buraya tıklayın',
            'finished'  => 'Uygulamanın veritabanını başarıyla güncelleştirildi.',
            'title'     => 'Tamamlandı',
        ],
        'log'       => [
            'success_message'   => 'Uygulama GÜNCELLENDİ',
        ],
        'overview'  => [
            'install_updates'   => 'Güncellemeyi yükle',
            'message'           => '1 güncelleme var.| :number güncellemeleri var.',
            'title'             => 'Genel bakış',
        ],
        'title'     => 'Güncelleyici',
        'welcome'   => [
            'message'   => 'Güncelleme sihirbazına hoş geldiniz.',
            'title'     => 'Güncelleyiciye Hoş Geldiniz',
        ],
    ],
];
