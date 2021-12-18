<?php

namespace Anomalyce\Atomic\Feature;

use Illuminate\Support\AggregateServiceProvider;

class FeatureServiceProvider extends AggregateServiceProvider
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
    //
  }
}
