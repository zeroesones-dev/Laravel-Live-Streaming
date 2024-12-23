<?php

namespace DreamersDesire\LaravelLiveStreaming;

use Illuminate\Support\ServiceProvider;

class LiveStreamServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-live-streaming');

        $this->publishes([
            __DIR__.'/../server.js' => base_path('server.js'),
            __DIR__.'/StreamController.php' => app_path('Http/Controllers/StreamController.php'),
            __DIR__.'/../resources/views' => resource_path('views/live-streaming'),
        ], 'live-streaming');
    }

    public function register()
    {
        
    }
}

