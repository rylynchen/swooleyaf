<?php

class Bootstrap extends Yaf\Bootstrap_Abstract {
    
    /**
     * @desc 应用配置
     * @var array
     */
    private $_config;

    public function _initBootstrap (Yaf\Dispatcher $dispatcher) {
        // echo "_initBootstrap\n";
        $config = Yaf\Application::app()->getConfig();
        // var_dump($config);
        Yaf\Registry::set("config",  $config);
    }

    //禁用视图
    public function _initViewParameters(Yaf\Dispatcher $dispatcher) {
        // echo "_initViewParameters\n";
        $dispatcher->disableView();
    }

    //已禁用
    public function _initLoader(){
        // echo "_initLoader\n";
    }
    
    //是否禁止显示错误
    public function _initErrors(){
        // echo "_initErrors\n";
        // if($this->_config->application->showErrors){
        //     error_reporting (-1);
        //     ini_set('display_errors','On');
        // }
    }

    //读取配置文件路由
    public function _initRoute(Yaf\Dispatcher $dispatcher) {
        // echo "_initRoute\n";
        $router = Yaf\Dispatcher::getInstance()->getRouter();
        // $routes = new Yaf\Config\Ini(APP_PATH.'/conf/route.ini');
        // var_dump(Yaf\Registry::get("config")->routes);
        // var_dump(Yaf\Registry::get("config")->routes);
        // var_dump(Yaf\Registry::get("config")->routes);
        $router->addConfig(Yaf\Registry::get("config")->routes);
        // $router->addConfig($routes->routes);
    }

}
