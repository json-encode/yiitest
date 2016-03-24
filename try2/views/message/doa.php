<?php

use yii\widgets\LinkPager
?>

<p>
<table>
<th>id</th>
<th>留言内容</th>
<th>操作</th>
<?php foreach($model as $val){?>
	<tr>
	<td><?php echo $val['m_id']?></td>
	<td><?php echo $val['m_content']?></td>
	<td>
	<a href="#" onclick="del(<?php echo $val['m_id']?>)">删除</a>
	<a href="#" onclick="upda(<?php echo $val['m_id']?>)">修改</a>
	</td>
	</tr>
<?php }?>

</table>
</p>

<?php
echo LinkPager::widget([
    'pagination' => $page,
]);
?>
