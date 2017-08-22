<?php

use \Dvd\Tools\Common;
// use Repositories\Index;

class SignController extends \Yaf\Controller_Abstract {

   public function doAction() {//默认Action
   		// $indexMod = new IndexModel();
   		// $slide = $indexMod->getSlide();
   		// // var_dump($slide);
   		// $get = HttpServer::$get;
   		// $post = HttpServer::$post;
   		// var_dump($get, $post);
         // $a = IndexModel::getSlide();
         // var_dump($a);
         $list = SignPlugin::getList();
         $row = SignPlugin::getRow();
         var_dump($list, $row);
         $sn = Common::makeOrderSn();
         // $b = Index::getSlide();
   		echo "doAction1 $sn $b \n";
   		// $p = $this->getRequest()->getPost('c');
   		// var_dump($p);
   		// $this->getResponse()->setBody("Hello World");
   		// echo "Hello yaf\n";
   		// var_dump($_POST, $_GET);
       // $this->getView()->assign("content", "Hello World");
   		return false;
   }
}