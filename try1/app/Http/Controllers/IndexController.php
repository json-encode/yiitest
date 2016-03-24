<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use DB;

class IndexController extends Controller
{
	public function index(){
	$sql="select m_id,m_content from message";
	
	$users = DB::table('message')->paginate(4);
	return view("index/index",['re'=>$users,]);
	}
	//处理添加
	public function doa(){
		$content=$_POST['m_content'];
		//echo $content;die;
		$re=DB::insert("insert into message(m_content) values('$content')");
		if($re){
		echo "1";
		}else{
		echo "2";
		}
	}

	//删除
	public function del(){
	$id=$_POST['id'];
	$re=DB::delete("delete from message where m_id='$id'");
		if($re){
		echo "1";
		}else{
		echo "2";
		}
	}

	//修改
	public function upda(){
		$id=$_GET['id'];
		//echo $id;die;
		$re=DB::select("select m_content,m_id from message where m_id='$id'");
		//print_r($re);die;
		return view("index/upda",['upda'=>$re]);
	}	
	//处理修改
	public function doupda(){
		$id=$_POST['id'];
		$content=$_POST['m_content'];
		$re=DB::update("update message set m_content='$content' where m_id='$id'");
		if($re){
		echo "<script>alert('修改成功');location.href='./index'</script>";
		}else{
		echo "<script>alert('修改失败');location.href='./up'</script>";	
		}
	}

}