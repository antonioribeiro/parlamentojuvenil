<?php

use LaravelLegends\PtBrValidator\ValidatorProvider;

return [

    'debug' => env('APP_DEBUG', false),

    'app.name' => 'Parlamento Juvenil',

    'domain' => env('APP_DOMAIN', 'parlamentojuvenil.rj.gov.br'),

    'year' => env('APP_YEAR'),

    'url' => env('URL_BASE'),

    'election' => [
        'enabled' => env('ELECTION_ENABLED', false),
        'start' => env('ELECTION_START'),
        'end' => env('ELECTION_END'),
        'round' => env('ELECTION_ROUND'),
        'show-elected-1nd' => env('ELECTION_SHOW_ELECTED_1ND'),
        'show-elected-2nd' => env('ELECTION_SHOW_ELECTED_2ND'),
    ],

    'subscriptions' => [
        'enabled' => env('SUBSCRIPTIONS_ENABLED'),
        'start' => env('SUBSCRIPTIONS_START'),
        'end' => env('SUBSCRIPTIONS_END'),
    ],

    'student' => [
        'birthdate' => [
            'start' => env('STUDENT_BIRTHDATE_START'),
            'end' => env('STUDENT_BIRTHDATE_END'),
        ]
    ],

    'training' => [
        'start' => env('TRAINING_START'),
        'end' => env('TRAINING_END'),
    ],

    'flag' => [
        'contest' => [
            'show_rules' => env('FLAG_CONTEST_SHOW_RULES', false),

            'subscriptions' => [
                'start' => env('FLAG_CONTEST_SUBSCRIPTIONS_START'),
                'end' => env('FLAG_CONTEST_SUBSCRIPTIONS_END'),
            ],

            'election' => [
                'start' => env('FLAG_CONTEST_ELECTION_START'),
                'end' => env('FLAG_CONTEST_ELECTION_END'),
            ],
        ],
    ],

    'timezone' => 'America/Sao_Paulo',

    'locale' => 'pt_BR',

    'fallback_locale' => 'en',

    'key' => env('APP_KEY', 'SomeRandomString'),

    'cipher' => 'AES-256-CBC',

    /*
    |--------------------------------------------------------------------------
    | Logging Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure the log settings for your application. Out of
    | the box, Laravel uses the Monolog PHP logging library. This gives
    | you a variety of powerful log handlers / formatters to utilize.
    |
    | Available Settings: "single", "daily", "syslog", "errorlog"
    |
    */

    'log' => 'single',

    /*
    |--------------------------------------------------------------------------
    | Autoloaded Service Providers
    |--------------------------------------------------------------------------
    |
    | The service providers listed here will be automatically loaded on the
    | request to your application. Feel free to add your own services to
    | this array to grant expanded functionality to your applications.
    |
    */

    'providers' => [

        /*
         * Laravel Framework Service Providers...
         */
        Illuminate\Foundation\Providers\ArtisanServiceProvider::class,
        Illuminate\Auth\AuthServiceProvider::class,
        Illuminate\Broadcasting\BroadcastServiceProvider::class,
        Illuminate\Bus\BusServiceProvider::class,
        Illuminate\Cache\CacheServiceProvider::class,
        Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
        Illuminate\Routing\ControllerServiceProvider::class,
        Illuminate\Cookie\CookieServiceProvider::class,
        Illuminate\Database\DatabaseServiceProvider::class,
        Illuminate\Encryption\EncryptionServiceProvider::class,
        Illuminate\Filesystem\FilesystemServiceProvider::class,
        Illuminate\Foundation\Providers\FoundationServiceProvider::class,
        Illuminate\Hashing\HashServiceProvider::class,
        Illuminate\Mail\MailServiceProvider::class,
        Illuminate\Pagination\PaginationServiceProvider::class,
        Illuminate\Pipeline\PipelineServiceProvider::class,
        Illuminate\Queue\QueueServiceProvider::class,
        Illuminate\Redis\RedisServiceProvider::class,
        Illuminate\Auth\Passwords\PasswordResetServiceProvider::class,
        Illuminate\Session\SessionServiceProvider::class,
        Illuminate\Translation\TranslationServiceProvider::class,
        Illuminate\Validation\ValidationServiceProvider::class,
        Illuminate\View\ViewServiceProvider::class,

        /*
         * Application Service Providers...
         */
        App\Providers\AppServiceProvider::class,
        App\Providers\EventServiceProvider::class,
        App\Providers\RouteServiceProvider::class,
        Bugsnag\BugsnagLaravel\BugsnagServiceProvider::class,

        /*
         * My Providers
         */
        App\Providers\ComposerServiceProvider::class,
        Maatwebsite\Excel\ExcelServiceProvider::class,
        LaravelLegends\PtBrValidator\ValidatorProvider::class,

        /*
          Other service providers...
        */
        //Laravel\Socialite\SocialiteServiceProvider::class,
        SocialiteProviders\Manager\ServiceProvider::class,
        Maatwebsite\Excel\ExcelServiceProvider::class,
        BackupManager\Laravel\Laravel5ServiceProvider::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Class Aliases
    |--------------------------------------------------------------------------
    |
    | This array of class aliases will be registered when this application
    | is started. However, feel free to register as many as you wish as
    | the aliases are "lazy" loaded so they don't hinder performance.
    |
    */

    'aliases' => [

        'App'       => Illuminate\Support\Facades\App::class,
        'Artisan'   => Illuminate\Support\Facades\Artisan::class,
        'Auth'      => Illuminate\Support\Facades\Auth::class,
        'Blade'     => Illuminate\Support\Facades\Blade::class,
        'Bus'       => Illuminate\Support\Facades\Bus::class,
        'Cache'     => Illuminate\Support\Facades\Cache::class,
        'Config'    => Illuminate\Support\Facades\Config::class,
        'Cookie'    => Illuminate\Support\Facades\Cookie::class,
        'Crypt'     => Illuminate\Support\Facades\Crypt::class,
        'DB'        => Illuminate\Support\Facades\DB::class,
        'Eloquent'  => Illuminate\Database\Eloquent\Model::class,
        'Event'     => Illuminate\Support\Facades\Event::class,
        'File'      => Illuminate\Support\Facades\File::class,
        'Hash'      => Illuminate\Support\Facades\Hash::class,
        'Input'     => Illuminate\Support\Facades\Input::class,
        'Inspiring' => Illuminate\Foundation\Inspiring::class,
        'Lang'      => Illuminate\Support\Facades\Lang::class,
        'Log'       => Illuminate\Support\Facades\Log::class,
        'Mail'      => Illuminate\Support\Facades\Mail::class,
        'Password'  => Illuminate\Support\Facades\Password::class,
        'Queue'     => Illuminate\Support\Facades\Queue::class,
        'Redirect'  => Illuminate\Support\Facades\Redirect::class,
        'Redis'     => Illuminate\Support\Facades\Redis::class,
        'Request'   => Illuminate\Support\Facades\Request::class,
        'Response'  => Illuminate\Support\Facades\Response::class,
        'Route'     => Illuminate\Support\Facades\Route::class,
        'Schema'    => Illuminate\Support\Facades\Schema::class,
        'Session'   => Illuminate\Support\Facades\Session::class,
        'Storage'   => Illuminate\Support\Facades\Storage::class,
        'URL'       => Illuminate\Support\Facades\URL::class,
        'Validator' => Illuminate\Support\Facades\Validator::class,
        'View'      => Illuminate\Support\Facades\View::class,
        'Excel'     => Maatwebsite\Excel\Facades\Excel::class,
        'Socialite' => Laravel\Socialite\Facades\Socialite::class,
        'Excel'     => Maatwebsite\Excel\Facades\Excel::class,
    ],

];
