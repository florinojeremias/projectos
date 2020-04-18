<?php

namespace App\Providers;

//use illuminate\Contracts\Auth\Access\Gate as GateContract;
//use Illuminate\Auth\Access\Gate as GateContract ;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Contracts\Auth\Access\Gate  as GateContract ;
use App\Models\Permicao;
use App\User;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
       'App\Model' => 'App\Policies\ModelPolicy',
        \App\Models\Aluno::class=> \App\Policies\Aluno::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);




        //
    }
}
