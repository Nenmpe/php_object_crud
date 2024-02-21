<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
</head>
<body>
    <form action="signupController.php" method="post">
        <div class="name">
            <label for="name">Name : <input type="text" name="name"></label>
        </div>

        <div class="email">  
          <label for="email">Email : <input type="email" name="email"></label>
        </div>

        <div class="password">  
          <label for="pass">Password : <input type="password" name="pass"></label>
        </div>
        
        <div class="btn">
            <input type="submit" value="Sign Up">
        </div>
    </form>
</body>
</html>
