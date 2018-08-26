<?php
/**
 * Project: template
 *
 * Author: Farhan Wazir
 * Email: farhan.wazir@gmail.com, seejee1@gmail.com
 * Date: 3/30/2017
 * Time: 3:07 AM
 *
 *
 *
 * This project file is not redistributeable without permissions.
 * For more details about redistribution and reselling, contact to provided author details.
 */

namespace CIAdmin\Template;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Routing\Router;

class Register
{

    /**
     * Bootstrap script
     *
     * @param Application $app
     * @return void
     */
    public function bootstrap(Application $app){
        $app->register(\Riverskies\Laravel\MobileDetect\MobileDetectServiceProvider::class);

        $this->mapWebRoutes($app->make(Router::class));
    }

    public function onExecute($registrar){
        if(is_dir($layouts = __DIR__.'/layout')){
            $registrar->loadViewsFrom($layouts, 'template');
        }
    }

    protected function mapWebRoutes(Router $router){
        /* Inject routes dynamically */
        $router->group(['middleware' => 'web'], function($router){
            require_once __DIR__.'/Support/routes.php';
        });
    }
}