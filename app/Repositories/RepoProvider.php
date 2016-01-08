<?php 
namespace App\Repositories;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider {

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
		$this->app->bind(
			'App\Repositories\Customer\CustomerRepository', 
			'App\Repositories\Customer\DbCustomerRepository'
		);

        $this->app->bind(
            'App\Repositories\Flight\FlightRepository', 
            'App\Repositories\Flight\DbFlightRepository'
        );

    }
}