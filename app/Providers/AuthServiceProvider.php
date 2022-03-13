<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\Kw;
use App\Policies\KwPolicy;

class AuthServiceProvider extends ServiceProvider
{
//    public function __construct() {
//        dd('AUTH SERVICE');
//    }
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        
        Kw::class=>KwPolicy::class,
        Worker::class=>WorkerPolicy::class
    ];

//    public function __construct() {
//        dd("in authservoce provider");
//    }
    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        
        $this->registerPolicies();

        //
    }
}
