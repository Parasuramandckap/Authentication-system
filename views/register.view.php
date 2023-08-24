<html>
<head>
    <title></title>
</head>
<body>
<?php if(isset($_SESSION["exit"])):?>
<span><?php echo $_SESSION["exit"] ?></span>
<?php endif; ?>
<form action="/register" method="post">
    <label>username</label>
    <input type="text" name="username">
    <label>email</label>
    <input type="email" name="email">
    <label>pass</label>
    <input type="password" name="pass">
    <button>Submit</button>
</form>
</body>
</html>