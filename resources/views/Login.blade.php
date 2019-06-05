<html>
 <head>
 <title>Login</title>
 </head>
 <body>

 <h1>Login</h1>

 <ul>
 <?php foreach($Login as $Login): ?>
 <li><?=  $Login->id; ?> (<?= $Login->nome;?>)</li>
 <?php endforeach; ?>
</ul>

 </body>
<html>