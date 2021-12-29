<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="stylee.css">
</head>
<body>

    <div class="login">
        <form action="post.php" method="POST">
    <label for="username">login</label><br><br>
    
    <?php if(isset($error_username)){
        echo '<p>' . $error_username . '</p>';
       ?>  <?php } ?>
       
    <input type="text" name="username" id="username" placeholder="username"><br>
    <br>
    <?php if(isset($error_password)){
        echo '<p>' . $error_password . '</p>';
      ?> <?php } ?>
  
    <input type="password" name="password" id="password" placeholder="password" autocomplete="off"><br>
    
    <button type="submit" name="submit">Login</button>
    </form>
     </div>


</body>
</html>
