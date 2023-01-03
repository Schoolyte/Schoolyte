<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Defaults
    |--------------------------------------------------------------------------
    |
    | This option controls the default authentication "guard" and password
    | reset options for your application. You may change these defaults
    | as required, but they're a perfect start for most applications.
    |
    */

    'defaults' => [
        'guard' => 'siswa',
        'passwords' => 'siswas',
    ],

    /*
    |--------------------------------------------------------------------------
    | Authentication Guards
    |--------------------------------------------------------------------------
    |
    | Next, you may define every authentication guard for your application.
    | Of course, a great default configuration has been defined for you
    | here which uses session storage and the Eloquent user provider.
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | Supported: "session"
    |
    */

    'guards' => [
        'siswa' => [
            'driver' => 'session',
            'provider' => 'siswas',
        ],
        'admin' => [
            'driver' => 'session',
            'provider' => 'admins',
        ],
        'guru' => [
            'driver' => 'session',
            'provider' => 'gurus',
        ],
        'walisiswa' => [
            'driver' => 'session',
            'provider' => 'walisiswas',
        ],
        'pegawai' => [
            'driver' => 'session',
            'provider' => 'pegawais',
        ],
        'pegawaikantin' => [
            'driver' => 'session',
            'provider' => 'pegawaikantins',
        ],
        'pegawaiPerpus' => [
            'driver' => 'session',
            'provider' => 'pegawaiPerpuss',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | User Providers
    |--------------------------------------------------------------------------
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | If you have multiple user tables or models you may configure multiple
    | sources which represent each model / table. These sources may then
    | be assigned to any extra authentication guards you have defined.
    |
    | Supported: "database", "eloquent"
    |
    */

    'providers' => [
        'siswas' => [
            'driver' => 'eloquent',
            'model' => App\Models\Siswa::class,
        ],
        'admins' => [
            'driver' => 'eloquent',
            'model' => App\Models\Admin::class,
        ],
        'gurus' => [
            'driver' => 'eloquent',
            'model' => App\Models\Guru::class,
        ],
        'walisiswas' => [
            'driver' => 'eloquent',
            'model' => App\Models\WaliSiswa::class,
        ],
        'pegawais' => [
            'driver' => 'eloquent',
            'model' => App\Models\Pegawai::class,
        ],
        'pegawaikantins' => [
            'driver' => 'eloquent',
            'model' => App\Models\PegawaiKantin::class,
        ],
        'pegawaiPerpuss' => [
            'driver' => 'eloquent',
            'model' => App\Models\PegawaiPerpustakaan::class,
        ],
        // 'users' => [
        //     'driver' => 'database',
        //     'table' => 'users',
        // ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Resetting Passwords
    |--------------------------------------------------------------------------
    |
    | You may specify multiple password reset configurations if you have more
    | than one user table or model in the application and you want to have
    | separate password reset settings based on the specific user types.
    |
    | The expire time is the number of minutes that each reset token will be
    | considered valid. This security feature keeps tokens short-lived so
    | they have less time to be guessed. You may change this as needed.
    |
    */

    'passwords' => [
        'siswas' => [
            'provider' => 'siswas',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
        'admins' => [
            'provider' => 'admins',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
        'gurus' => [
            'provider' => 'gurus',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
        'walisiswas' => [
            'provider' => 'walisiswas',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
        'pegawais' => [
            'provider' => 'pegawais',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
        'pegawaikantins' => [
            'provider' => 'pegawaikantins',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
        'pegawaiPerpuss' => [
            'provider' => 'pegawaiPerpuss',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Password Confirmation Timeout
    |--------------------------------------------------------------------------
    |
    | Here you may define the amount of seconds before a password confirmation
    | times out and the user is prompted to re-enter their password via the
    | confirmation screen. By default, the timeout lasts for three hours.
    |
    */

    'password_timeout' => 10800,

];
