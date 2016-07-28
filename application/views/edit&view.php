<html>
<head>
</head>
<body>
<h2>About Article</h2>
<?php foreach($posts  as $r): ?>
<tr><p>Article Title:<?php echo $r->article_title ?>
 </p>   </tr>
	<tr><p>Article Body:<?php echo $r->article_body ?>
	 </p></tr>
	 <tr><p>Article Author:<?php echo $r->article_author ?>
	 </p></tr>
	
<?php endforeach; ?>
</table>

</body>
</html>