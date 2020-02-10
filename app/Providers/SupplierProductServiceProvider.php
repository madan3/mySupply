<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class SupplierProductServiceProvider
 * @package App\Providers
 */
class SupplierProductServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap application service
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->bind(
            'App\Repositories\SupplierProduct\SupplierProductRepositoryInterface',
            'App\Repositories\SupplierProduct\SupplierProductRepository'
        );
    }
}
