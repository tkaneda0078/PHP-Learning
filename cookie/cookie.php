<html>
<head>

</head>
<body>
    <form method="post" action="cookie2.php">
        メールアドレス:
        <input type="text" name="email" size="40" value="<?php echo $_COOKIE['email']; ?>">
        <input type="submit" value="送信">
    </form>
</body>
</html>