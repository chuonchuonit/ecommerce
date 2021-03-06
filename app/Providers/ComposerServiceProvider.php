<?php namespace App\Providers;

use View;
use Illuminate\Support\ServiceProvider;
use App\Http\ViewComposers\CartComposer;

class ComposerServiceProvider extends ServiceProvider
{

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {
        // Using class based composers...

        View::composer('*', 'Hideyo\ViewComposers\FooterComposer');
        View::composer('*', 'Hideyo\ViewComposers\ProductCategoryComposer');
        View::composer('*', 'Hideyo\ViewComposers\CartComposer');
        View::composer('*', 'Hideyo\ViewComposers\ShopComposer');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
