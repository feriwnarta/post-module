<?php

namespace Modules\Post\Providers;

use Illuminate\Support\ServiceProvider;

class MenuProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     */
    public function register(): void
    {
        add_action("load-menus", function() {
            echo <<<HTML
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Warehouse Module</h5>
                        <p class="card-text">Warehouse Module</p>
                        <a href="/post/" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            HTML;
        });
    }

    /**
     * Get the services provided by the provider.
     */
    public function provides(): array
    {
        return [];
    }
}
