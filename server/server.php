<?php

class HttpServer
{
	public static $instance;

	public $http;
	public static $get;
	public static $post;
	public static $header;
	public static $server;
	private $application;

	public function __construct() {
		echo "HttpServer::__construct\n";
		$http = new swoole_http_server("127.0.0.1", 9503);

		// $http->set(
		// 	array(
		// 		'worker_num' => 16,
		// 		'daemonize' => true,
	 //            'max_request' => 10000,
	 //            'dispatch_mode' => 1
		// 	)
		// );

		$http->on('WorkerStart' , array( $this , 'onWorkerStart'));

		$http->on('request', function ($request, $response) {
			if( isset($request->server) ) {
				HttpServer::$server = $request->server;
			}else{
				HttpServer::$server = [];
			}
			if( isset($request->header) ) {
				HttpServer::$header = $request->header;
			}else{
				HttpServer::$header = [];
			}
			if( isset($request->get) ) {
				HttpServer::$get = $request->get;
			}else{
				HttpServer::$get = [];
			}
			if( isset($request->post) ) {
				HttpServer::$post = $request->post;
			}else{
				HttpServer::$post = [];
			}

			// TODO handle img

			ob_start();
			try {
				$yaf_request = new Yaf\Request\Http( 
					HttpServer::$server['request_uri']);

			    $this->application->bootstrap()
			    ->getDispatcher()->dispatch($yaf_request);
			    
			    // unset(Yaf_Application::app());
			} catch ( \Yaf\Exception $e ) {
				var_dump( $e );
			}
			
		    $result = ob_get_contents();

		  	ob_end_clean();

		  	// add Header
		  	
		  	// add cookies
		  	
		  	// set status
		  	$response->end($result);
		});

		$http->start();
	}

	public function onWorkerStart() {
		echo "HttpServer::onWorkerStart\n";
		define('APP_PATH', dirname(__DIR__));
		ob_start();
		require APP_PATH . '/vendor/autoload.php';
		$this->application = new Yaf\Application( APP_PATH . 
					"/conf/application.ini");
		Yaf\Loader::import(APP_PATH . "/application/library/common.php");
		// $this->application->getDispatcher()->setErrorHandler("myErrorHandler");
		// $this->application->getDispatcher()->catchException(true);
		// $this->application->run();
		// $this->application->bootstrap();
		ob_end_clean();

		// define("APP_PATH",  realpath(dirname(__FILE__) . '/../')); /* 指向public的上一级 */
		// $app  = new Yaf_Application(APP_PATH . "/conf/application.ini");
		// $app->run();

	}

	public static function getInstance() {
		echo "HttpServer::getInstance\n";
		if (!self::$instance) {
            self::$instance = new HttpServer;
        }
        return self::$instance;
	}
}

HttpServer::getInstance();
