<!doctype html>
<html>
<head><title>Fortunes</title></head>
<body>
<table>
<tr><th>id</th><th>message</th></tr>
<?php foreach($fortunes as $fortune) { ?>
  <tr><td><?php echo $fortune['id']; ?></td><td><?php echo $h($fortune['message']); ?></td></tr>
<?php } ?>
</table>
</body>
</html>
