<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use Illuminate\Auth\Access\Response;


class AuthServiceProvider extends ServiceProvider
{

     protected $messages = "Az oldal nem elérhető!";


    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
/*
public function admins() {
return Gate::authorize("admin-role");

}
*/

    public function boot()
    {
        $this->registerPolicies();

        
        Gate::define("create-belep" , function(User $user) {
       

           
           if ($user->role == "user" || $user->role == "admin") {

return Response::allow();
       } else {
        


           return Response::deny($this->messages);


       }
    });

    Gate::define("admin-role" , function(User $user) {
        if ($user->role == "admin") {

            return Response::allow();
                   } else {
                    
                       return Response::deny($this->messages);
            
            
                   }
                });

 
                Gate::define("author-role" , function(User $user) {
                    if ($user->role == "admin"
                    ||
                     $user->username == Auth::user()->username) {

                        return Response::allow();
                               } else {
                                   return Response::deny($this->messages);
                               }
                            });


    }

}

