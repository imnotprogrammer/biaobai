<?php
namespace console\controllers;
use Yii;
use yii\console\Controller;
class DataController extends Controller
{
   public function actionIndex($method = '')
   {
	   if ($method == 'prod') {
		   $this->prodService();
	   }else {
		   $this->devService();
	   }
   }
   private function prodService(){
	   echo 'this prod service';
   }
   private function devService(){
	   echo 'this dev service';
   }
}