<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use App;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */

    public function boot()
    {
        Schema::defaultStringLength(191);
        // $valor = App\Menu::all();
        // view()->share('menus', $valor);

        // $Articulos = App\Articulo::All();
        // view()->share('Articulos', $Articulos);

        // $fondo = App\Color::all();
        // view()->share('CDF', $fondo); # CDF (Color De Fondo)
    }
}