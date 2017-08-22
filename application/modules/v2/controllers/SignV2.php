<?php

// use Dvd\Tools\Common;

class SignV2Controller extends \Yaf\Controller_Abstract {

   public function doAction()
   {
         // 默认Action
   		// $indexMod = new IndexModel();
   		// $slide = $indexMod->getSlide();
   		// // var_dump($slide);
   		// $get = HttpServer::$get;
   		// $post = HttpServer::$post;
   		// var_dump($get, $post);
         // $sn = Common::makeOrderSn();
   		echo "v2 doAction 123 \n";
   		// $p = $this->getRequest()->getPost('c');
   		// var_dump($p);
   		// $this->getResponse()->setBody("Hello World");
   		// echo "Hello yaf\n";
   		// var_dump($_POST, $_GET);
         // $this->getView()->assign("content", "Hello World");
   		return false;
   }

   public function listAction() {
         // 默认Action
         // $indexMod = new IndexModel();
         // $slide = $indexMod->getSlide();
         // // var_dump($slide);
         // $get = HttpServer::$get;
         // $post = HttpServer::$post;
         // var_dump($get, $post);
         // $sn = Common::makeOrderSn();
         // $ret = IndexRepository::getSlide();
         echo "v2 listAction\n";
         // $p = $this->getRequest()->getPost('c');
         // var_dump($p);
         // $this->getResponse()->setBody("Hello World");
         // echo "Hello yaf\n";
         // var_dump($_POST, $_GET);
       // $this->getView()->assign("content", "Hello World");
         return false;
   }
}