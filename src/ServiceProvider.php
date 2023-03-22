<?php

namespace Mterek97\Example;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot()
    {
        if (\File::exists(__DIR__ . '/../vendor/autoload.php')) {
            include __DIR__ . '/../vendor/autoload.php';
        }
    }
}
