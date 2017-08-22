<?php

// use Dvd\Tools\Common;
use App\Repositories\IndexRepository;

class SignController extends \Yaf\Controller_Abstract
{
   public $name;

   public function doAction() {
         $action = $this->getRequest()->getActionName();
         
         var_dump($this->getRequest());
         // 默认Action
   		// $indexMod = new IndexModel();
   		// $slide = $indexMod->getSlide();
   		// // var_dump($slide);
   		// $get = HttpServer::$get;
   		// $post = HttpServer::$post;
   		// var_dump($get, $post);
         // $sn = Common::makeOrderSn();
         $ret = IndexRepository::getSlide();
   		echo "v1 doAction 123 $ret \n";
   		// $p = $this->getRequest()->getPost('c');
   		// var_dump($p);
   		// $this->getResponse()->setBody("Hello World");
   		// echo "Hello yaf\n";
   		// var_dump($_POST, $_GET);
       // $this->getView()->assign("content", "Hello World");
         $this->name = 'abc';
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
         echo "v1 listAction $this->name\n";
         // $p = $this->getRequest()->getPost('c');
         // var_dump($p);
         // $this->getResponse()->setBody("Hello World");
         // echo "Hello yaf\n";
         // var_dump($_POST, $_GET);
       // $this->getView()->assign("content", "Hello World");
         return false;
   }
}