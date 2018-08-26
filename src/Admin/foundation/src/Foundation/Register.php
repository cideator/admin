<?php

namespace CIAdmin\Foundation;

use Illuminate\Contracts\Foundation\Application;

class Register
{

    /**
     * Bootstrap script
     *
     * @param Application $app
     * @return void
     */
    public function bootstrap(Application $app){
        $app->singleton('models', function($app){
            return new ModelsRepository($app);
        });

        /* bind */
        //$app->bind('CIAdmin\Contracts\Report\ModelFiltration', 'CIAdmin\Foundation\Containers\ModelFiltration');
    }

}