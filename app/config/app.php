<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Application Debug Mode
	|--------------------------------------------------------------------------
	|
	| When your application is in debug mode, detailed error messages with
	| stack traces will be shown on every error that occurs within your
	| application. If disabled, a simple generic error page is shown.
	|
	*/

	'debug' => true,

	/*
	|--------------------------------------------------------------------------
	| Application URL
	|--------------------------------------------------------------------------
	|
	| This URL is used by the console to properly generate URLs when using
	| the Artisan command line tool. You should set this to the root of
	| your application so that it is used when running Artisan tasks.
	|
	*/

	'url' => 'http://localhost',

	/*
	|--------------------------------------------------------------------------
	| Application Timezone
	|--------------------------------------------------------------------------
	|
	| Here you may specify the default timezone for your application, which
	| will be used by the PHP date and date-time functions. We have gone
	| ahead and set this to a sensible default for you out of the box.
	|
	*/

	'timezone' => 'UTC',

	/*
	|--------------------------------------------------------------------------
	| Application Locale Configuration
	|--------------------------------------------------------------------------
	|
	| The application locale determines the default locale that will be used
	| by the translation service provider. You are free to set this value
	| to any of the locales which will be supported by the application.
	|
	*/

	'locale' => 'en',

	/*
	|--------------------------------------------------------------------------
	| Encryption Key
	|--------------------------------------------------------------------------
	|
	| This key is used by the Illuminate encrypter service and should be set
	| to a random, 32 character string, otherwise these encrypted strings
	| will not be safe. Please do this before deploying an application!
	|
	*/

	'key' => 'YourSecretKey!!!',

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

	'providers' => array(

		'Fly\Foundation\Providers\FlyConsoleServiceProvider',
		'Fly\Auth\AuthServiceProvider',
		'Fly\Cache\CacheServiceProvider',
		'Fly\Session\CommandsServiceProvider',
		'Fly\Foundation\Providers\ConsoleSupportServiceProvider',
		'Fly\Routing\ControllerServiceProvider',
		'Fly\Cookie\CookieServiceProvider',
		'Fly\Database\DatabaseServiceProvider',
		'Fly\Encryption\EncryptionServiceProvider',
		'Fly\Filesystem\FilesystemServiceProvider',
		'Fly\Hashing\HashServiceProvider',
		'Fly\Html\HtmlServiceProvider',
		'Fly\Log\LogServiceProvider',
		'Fly\Mail\MailServiceProvider',
		'Fly\Database\MigrationServiceProvider',
		'Fly\Pagination\PaginationServiceProvider',
		'Fly\Queue\QueueServiceProvider',
		'Fly\Redis\RedisServiceProvider',
		'Fly\Remote\RemoteServiceProvider',
		'Fly\Auth\Reminders\ReminderServiceProvider',
		'Fly\Database\SeedServiceProvider',
		'Fly\Session\SessionServiceProvider',
		'Fly\Translation\TranslationServiceProvider',
		'Fly\Validation\ValidationServiceProvider',
		'Fly\View\ViewServiceProvider',
		'Fly\Workbench\WorkbenchServiceProvider',

	),

	/*
	|--------------------------------------------------------------------------
	| Service Provider Manifest
	|--------------------------------------------------------------------------
	|
	| The service provider manifest is used by FlyPHP to lazy load service
	| providers which are not needed for each request, as well to keep a
	| list of all of the services. Here, you may set its storage spot.
	|
	*/

	'manifest' => storage_path().'/meta',

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

	'aliases' => array(

		'App'             => 'Fly\Support\Facades\App',
		'Auth'            => 'Fly\Support\Facades\Auth',
		'Cache'           => 'Fly\Support\Facades\Cache',
		'ClassLoader'     => 'Fly\Support\ClassLoader',
		'Config'          => 'Fly\Support\Facades\Config',
		'Controller'      => 'Fly\Routing\Controller',
		'Cookie'          => 'Fly\Support\Facades\Cookie',
		'Crypt'           => 'Fly\Support\Facades\Crypt',
		'DB'              => 'Fly\Support\Facades\DB',
		'Event'           => 'Fly\Support\Facades\Event',
		'File'            => 'Fly\Support\Facades\File',
		'Form'            => 'Fly\Support\Facades\Form',
		'FlyConsole'      => 'Fly\Support\Facades\FlyConsole',
		'Hash'            => 'Fly\Support\Facades\Hash',
		'HTML'            => 'Fly\Support\Facades\HTML',
		'Input'           => 'Fly\Support\Facades\Input',
		'Lang'            => 'Fly\Support\Facades\Lang',
		'Log'             => 'Fly\Support\Facades\Log',
		'Mail'            => 'Fly\Support\Facades\Mail',
		'FlyModel'        => 'Fly\Database\ActiveRecord\Model',
		'Paginator'       => 'Fly\Support\Facades\Paginator',
		'Password'        => 'Fly\Support\Facades\Password',
		'Queue'           => 'Fly\Support\Facades\Queue',
		'Redirect'        => 'Fly\Support\Facades\Redirect',
		'Redis'           => 'Fly\Support\Facades\Redis',
		'Request'         => 'Fly\Support\Facades\Request',
		'Response'        => 'Fly\Support\Facades\Response',
		'Route'           => 'Fly\Support\Facades\Route',
		'SmartModel'      => 'Fly\Database\ActiveRecord\Smart\SmartModel',
		'Schema'          => 'Fly\Support\Facades\Schema',
		'Seeder'          => 'Fly\Database\Seeder',
		'Session'         => 'Fly\Support\Facades\Session',
		'SSH'             => 'Fly\Support\Facades\SSH',
		'Str'             => 'Fly\Support\Str',
		'Sword'           => 'Fly\Support\Facades\Sword',
		'URL'             => 'Fly\Support\Facades\URL',
		'Validator'       => 'Fly\Support\Facades\Validator',
		'View'            => 'Fly\Support\Facades\View',

	),

);
