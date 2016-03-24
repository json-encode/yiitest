<div id="list">
<?php

use yii\widgets\LinkPager
?>

<html>
<head>
<title>测试</title>
<meta charset="utf8"/>
</head>
<body>
	<input type="text" placeholder="请输入留言" name="m_content"/>
<br />
<input type="button" value="添加" id="sub"/>


<p>
<table>
<th>id</th>
<th>留言内容</th>
<th>操作</th>
<?php foreach($models as $v){?>
	<tr>
	<td><?php echo $v['m_id']?></td>
	<td><?php echo $v['m_content']?></td>
	<td>
	<a href="#" onclick="del(<?php echo $v['m_id']?>)">删除</a>
	<a href="#" onclick="upda(<?php echo $v['m_id']?>)">修改</a>
	</td>
	</tr>
<?php }?>

</table>
</p>

<?php
echo LinkPager::widget([
    'pagination' => $pages,
]);
?>

</body>
</html>

<script type="text/javascript" src="./jquery1-8-0.js"></script>
<script type="text/javascript">
$(document).on("click","#sub",function(){
	var content=$("[name='m_content']").val();
	
	$.post("index.php?r=message/doa",{m_content:content},function(data){
		$("#list").html(data)
	});
})

//删除
function del(id){
	if(confirm("你确定要删除吗?")){
		$.post("index.php?r=message/del",{id:id},function(txt){
			if(txt=='1'){
			alert("删除成功");
			location.href="index.php?r=message/index";
			}else{
			alert("失败");location.href="index.php?r=message/index";
			}
		})
	}
}

//修改
function upda(id){
	location.href="index.php?r=message/up&id="+id;
}
</script>
</div>