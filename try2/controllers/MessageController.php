<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use app\models\Message;
use yii\data\Pagination;

class MessageController extends Controller
{
	public $enableCsrfValidation = false;
	public function  actionIndex(){
		$message=new Message;
		$arr=$message->sel();
		//$count=count($arr);
		$pages = new Pagination(['totalCount' => $arr->count(),'pageSize'=>4]);
		$models = $arr->orderBy('m_addtime desc')
		->offset($pages->offset)
        ->limit($pages->limit)
        ->all();

		return $this->render('index', [
         'models' => $models,
         'pages' => $pages,
    ]);

	}
	public function actionDoa(){
$message=new Message;
		if($content=Yii::$app->request->ispost){
		$content=Yii::$app->request->post("m_content");
		
		$time=date("Y-m-d H:i:s",time());
		$re=$message->ad($content,$time);
		}
		$arr=$message->sel();
		//$count=count($arr);
		$pages = new Pagination(['totalCount' => $arr->count(),'pageSize'=>4]);
		$models = $arr->orderBy('m_addtime desc')
			->offset($pages->offset)
        ->limit($pages->limit)
        ->all();

		return $this->render('index', [
         'models' => $models,
         'pages' => $pages,
    ]);
	}
	

	public function actionDel(){
	$id=Yii::$app->request->post("id");
		$message=new Message;
		$mv=$message->del($id);
		if($mv){
		echo "1";
		}else{
		echo "2";
		}
	}

	public function actionUp(){
		$id=Yii::$app->request->get("id");
		//echo $id;die;
		$message=new Message;
		$re=$message->upid($id);
		//print_r($re);die;
		return $this->render("up",['re'=>$re]);
	}

	public function actionDoupda(){
		$id=Yii::$app->request->post("id");
		$content=Yii::$app->request->post("m_content");
		$message=new Message;
		$re=$message->updaall($id,$content);
		if($re>0){
		echo "<script>alert('修改成功');location.href='index.php?r=message/index'</script>";
		}else{
		echo "<script>alert('修改失败');</script>";
		}
	}
}