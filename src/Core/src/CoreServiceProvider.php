<?php

namespace Anomalyce\Atomic\Core;

use Illuminate\Support\AggregateServiceProvider;

class CoreServiceProvider extends AggregateServiceProvider
{
  /**
   * The provider class names.
   *
   * @var array
   */
  protected $providers = [
    //
  ];

  /**
   * Register any application services.
   *
   * @return void
   */
  public function register()
  {
    parent::register();
  }

  /**
   * Bootstrap any application services.
   *
   * @return void
   */
  public function boot()
  {
    $this->resolveViews();
  }

  /**
   * Resolve views.
   * 
   * @return void
   */
  protected function resolveViews(): void
  {
    $views = array_map(fn ($path) => $path.'/core', config('atomic.theme.views', []));

    $views[] = __DIR__.'/../resources/views';

    $this->loadViewsFrom($views, 'core');
  }
}
