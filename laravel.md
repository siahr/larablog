### プロジェクトの作成
 * ``` laravel new larablog ```
 
    or
 * ``` composer create-project laravel/laravel larablog --prefer-dist ```
 
### route
 * larablog/routes/web.php
    ``` 
        Route::get('/', function () {
                return view('welcome');
        });
    ``` 
### IDE

```
K:\larablog>composer require barryvdh/laravel-ide-helper
```

config/app.php
```
    'providers' => [

        /*
         * Laravel Framework Service Providers...
         */
        Illuminate\Auth\AuthServiceProvider::class,
...
        /*
         * Application Service Providers...
         */
        App\Providers\AppServiceProvider::class,
        App\Providers\AuthServiceProvider::class,
        // App\Providers\BroadcastServiceProvider::class,
        App\Providers\EventServiceProvider::class,
        App\Providers\RouteServiceProvider::class,
        Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class, <- 追加
    ],
```

```
K:\larablog>php artisan ide-helper:generate

```
###Auth
```
K:\larablog>php artisan make:auth
Authentication scaffolding generated successfully.
```
```
K:\larablog>php artisan migrate
Migration table created successfully.
Migrating: 2014_10_12_000000_create_users_table
Migrated:  2014_10_12_000000_create_users_table
Migrating: 2014_10_12_100000_create_password_resets_table
Migrated:  2014_10_12_100000_create_password_resets_table
```
