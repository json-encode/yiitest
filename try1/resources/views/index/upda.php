<form action="./doupda" method="post">
<?php foreach($upda as $v){?>
<input type="text" value="<?php echo $v['m_content']?>" name="m_content"/>
<input type="hidden" value="<?php echo $v['m_id']?>" name="id"/>
<?php }?>
<input type="submit" value="修改"/>
</form>