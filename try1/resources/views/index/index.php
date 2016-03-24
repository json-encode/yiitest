<html>
<head><title>测试</title>
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
<?php foreach($re as $k=>$v){?>
	<tr>
	<td><?php echo $v['m_id']?></td>
	<td><?php echo $v['m_content']?></td>
	<td><a href="#"  onclick="del(<?php echo $v['m_id']?>)">删除</a> <a href="#" onclick="upda(<?php echo $v['m_id']?>)">修改</a></td>
	</tr>
<?php }?>

</table>
</p>

<?php echo $re->render(); ?>

</body>
</html>
<script type="text/javascript" src="jquery1-8-0.js"></script>
<script type="text/javascript">
//点击添加
$(document).on("click","#sub",function(){
	var m_content=$("[name='m_content']").val()
	$.post("doa",{m_content:m_content},function(data){
		if(data=="1"){
		alert("添加成功");location.href="./index"
		}else{
		alert("添加失败")
		}
	});
})

//删除
function del(id){
	if(confirm("你确定要删除吗?")){
	$.post("./del",{id:id},function(txt){
		if(txt=="1"){
		alert("删除成功");location.href="./index"
		}else{
		alert("删除失败");location.href="./index"
		}
	})
	}
}

//修改
function upda(id){
	location.href="./up?id="+id;
}
</script>
