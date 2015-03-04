<?php namespace B3IT\MemcachedPlus;

use Illuminate\Cache\CacheServiceProvider;

class MemcachedPlusServiceProvider extends CacheServiceProvider
{

    /**
     * Replace \Illuminate\Cache\CacheManager with B3IT\CacheManager
     *
     * @return void
     */
    public function register()
    {
        parent::register();

        $this->app->bindShared('cache', function ($app) {
            return new MemcachedPlusCacheManager($app);
        });
    }

}