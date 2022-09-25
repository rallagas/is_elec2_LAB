<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
   <h1 class="text-danger">
<?php 
echo  $_GET['username'] ." ". md5($_GET['password']);
?> 
    </h1>
</body>
<script src="js/bootstrap.js"></script>
</html>

