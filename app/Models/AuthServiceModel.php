<?php

namespace App\Models;


use Laravel\Passport\Passport;
use Illuminate\Support\Facades\Gate;
use App\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceModel extends ServiceProvider
{
    /**
     * Сопоставления политик для приложения.
     *
     * @var array
     */
    protected $policies = [
        'App\Models' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Зарегистрируйте любые службы аутентификации / авторизации.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        Passport::routes();
    }
}
