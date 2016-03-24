<html>
<head>
<title>测试  <meta charset="utf8"/></title>
</head>
<body>
<form action="index.php?r=message/doupda" method="post">
<input type="text" value="<?php echo $re['m_content']?>" name="m_content"/>
<input type="hidden" value="<?php echo $re['m_id']?>" name="id"/>
<br />
<input type="submit" value="修改"/>
</form>
</body>
</html>