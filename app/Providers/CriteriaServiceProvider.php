<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class SupplierProductServiceProvider
 * @package App\Providers
 */
class CriteriaServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap application service
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->bind(
            'App\Repositories\Criteria\CriteriaRepositoryInterface',
            'App\Repositories\Criteria\CriteriaRepository'
        );
    }
}
