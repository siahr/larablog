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
    
    Route::get('admin','AdminController@index');
    Route::get('article','ArticleController@index');
    
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

###コントローラ
```
K:\larablog>php artisan make:controller AdminController
Controller created successfully.
```

###モデル
```
K:\larablog>php artisan make:model Article
Model created successfully.
```

###npm
Node.js をインストールしておく

``` npm install ```

``` npm run dev ```

dataTables を追加してみる （https://datatables.net/download/npm）

``` npm install datatables.net ```

``` npm install datatables.net-dt ```

resouces/js/app.js に
``` 
require('datatables.net');
``` 

resources/sass/app.scss に
```
@import url('https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css');
```

最後に

``` npm run prod ```


###DebugBar

```
K:\larablog>composer require barryvdh/laravel-debugbar
Using version ^3.2 for barryvdh/laravel-debugbar
./composer.json has been updated
Loading composer repositories with package information
Updating dependencies (including require-dev)
Package operations: 2 installs, 0 updates, 0 removals
  - Installing maximebf/debugbar (v1.15.0): Downloading (100%)
  - Installing barryvdh/laravel-debugbar (v3.2.0): Downloading (100%)
maximebf/debugbar suggests installing kriswallsmith/assetic (The best way to manage assets)
maximebf/debugbar suggests installing predis/predis (Redis storage)
Writing lock file
Generating optimized autoload files
> Illuminate\Foundation\ComposerScripts::postAutoloadDump
> @php artisan package:discover --ansi
Discovered Package: barryvdh/laravel-debugbar
Discovered Package: barryvdh/laravel-ide-helper
Discovered Package: beyondcode/laravel-dump-server
Discovered Package: fideloper/proxy
Discovered Package: laravel/tinker
Discovered Package: nesbot/carbon
Discovered Package: nunomaduro/collision
Package manifest generated successfully.
```
config/app.php
```
    'providers' => [
+       Barryvdh\Debugbar\ServiceProvider::class,
    ],

    'aliases' => [
+       'Debugbar' => Barryvdh\Debugbar\Facade::class,
    ]
```

```
K:\larablog>php artisan vendor:publish --provider="Barryvdh\Debugbar\ServiceProvider"
Copied File [\vendor\barryvdh\laravel-debugbar\config\debugbar.php] To [\config\debugbar.php]
Publishing complete.
```

.env に
```
DEBUGBAR_ENABLED=null
```

こんな感じでメッセージング
```
    public function index(Request $request)
    {
        $articles = Article::all();
        \Debugbar::info($request);
        return view("article.index", ["articles" => $articles]);
    }
```

