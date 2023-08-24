<html>
<head>
    <title>login</title>
</head>
<body>
<?php if(isset($_SESSION["password-not-match"])):?>
<span><?php echo $_SESSION["password-not-match"] ;?></span>
<?php endif;?>
<form action="/login" method="post">
    <label>email</label>
    <input type="email" name="email">
    <label>pass</label>
    <input type="password" name="pass">
    <button>Submit</button>
</form>
</body>
</html>