<?php

namespace app\models;
use Yii;
use yii\db\ActiveRecord;
class Message extends ActiveRecord
{
	public static function tableName(){
	return "message";
	}

	//查询所有
	public function sel(){
		$message=Message::find()->orderBy("m_addtime desc");
		return $message;
	}

	//添加
	public function ad($data,$time){
		$this->m_content=$data;
		$this->m_addtime=$time;
		return $this->insert();

	}
	//删除
	public function del($id){
		$re=Message::findOne($id);
		return $re->delete();

	}
	//修改查询
	public function upid($id){
		//return $re=Message::findOne($id);
		return Message::find()->where("m_id='$id'")->asArray()->one();
	}
	//修改
	public function updaall($id,$content){
	$count=$this->updateAll(array('m_content'=>$content),'m_id=:id',array(':id'=>$id));
	return $count;
	}

}