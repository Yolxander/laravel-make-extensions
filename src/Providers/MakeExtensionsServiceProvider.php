<?php

namespace Yolxitron\MakeExtensions\Providers;

use Illuminate\Support\ServiceProvider;
use Yolxitron\MakeExtensions\Console\Commands\MakeTransformer;
use Yolxitron\MakeExtensions\Console\Commands\MakeApiClient;
use Yolxitron\MakeExtensions\Console\Commands\MakeIntegrationTest;
use Yolxitron\MakeExtensions\Console\Commands\MakeApiTest;
use Yolxitron\MakeExtensions\Console\Commands\MakeDomainEvent;
use Yolxitron\MakeExtensions\Console\Commands\MakeValueObject;
use Yolxitron\MakeExtensions\Console\Commands\MakeService;
use Yolxitron\MakeExtensions\Console\Commands\MakeAction;

class MakeExtensionsServiceProvider extends ServiceProvider
{
  /**
   * Register any application services.
   */
  public function register()
  {
    // Register bindings, config merges, etc., if needed.
  }

  /**
   * Bootstrap any application services.
   */
  public function boot()
  {
    // Only load these commands if we're running in a CLI environment.
    if ($this->app->runningInConsole()) {
      // Register all the custom Artisan make commands.
      $this->commands([
        MakeTransformer::class,
        MakeApiClient::class,
        MakeIntegrationTest::class,
        MakeApiTest::class,
        MakeDomainEvent::class,
        MakeValueObject::class,
        MakeService::class,
        MakeAction::class,
      ]);

      // (Optional) Publish your stubs so they can be customized per-project.
      $this->publishes([
        __DIR__ . '/../../stubs/stubs' => base_path('stubs/make-extensions'),
      ], 'make-extensions-stubs');
    }
  }
}
