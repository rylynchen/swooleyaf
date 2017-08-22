<?php

class IndexController extends \Yaf\Controller_Abstract {
   public function indexAction() {//默认Action
   		$indexMod = new IndexModel();
   		$slide = $indexMod->getSlide();
   		// var_dump($slide);
   		$get = HttpServer::$get;
   		$post = HttpServer::$post;
   		// var_dump($get, $post);
   		echo "Hello yaf\n";
   		// $p = $this->getRequest()->getPost('c');
   		// var_dump($p);
   		// $this->getResponse()->setBody("Hello World");
   		// echo "Hello yaf\n";
   		// var_dump($_POST, $_GET);
       // $this->getView()->assign("content", "Hello World");
   		return false;
   }
}