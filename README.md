# Profil Kependudukan
Profil Kependudukan Pemerintah Provinsi Banten


## Install

```bash
$ composer require bantenprov/profil-kependudukan:dev-master
```

## Edit `config/app.php`

```php
'providers' => [

    App\Providers\EventServiceProvider::class,
    App\Providers\RouteServiceProvider::class,
    //...
    Bantenprov\ProfilKependudukan\ProfilKependudukanServiceProvider::class,

],

'aliases' => [

    'Validator' => Illuminate\Support\Facades\Validator::class,
    'View' => Illuminate\Support\Facades\View::class,
    //...
    'Form' => Collective\Html\FormFacade::class,
    'Html' => Collective\Html\HtmlFacade::class,
```

## Command setup :

```bash
$ php artisan profil-kependudukan:install
```