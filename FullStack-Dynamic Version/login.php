<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>


<!-- html codes... -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebCode | Login</title>
    <link rel="stylesheet" href="loginPro.css">
</head>
<body class="outline">
    
    

    <div class="logo"> <a class="w">Web</a><a class="c">Code</a><a class="tm">&trade;</a> </div> 

    <div id="box">
        
        <form method="post">

            <h1 style="text-align: center;">
                 Welcome ! 
            </h1>

            <p style="font-size: x-large;"> 
                Enter your username and password to login...
            </p>

            <p>
                <label for="Username" class="un">Username:</label> 
                <input type="text" name="user_name" id="Username" required/>
            </p>
            
            <p>
                <label for="User Password" class="pw">Password:</label> 
                <input type="password" name="password" id="User Password" required/>
            </p>

            <p>
                <input type="submit" value="Login" class="loginbutton"/>
            </p>
            
        </form>

        <a href="signup.php" ><button class="signupbutton" > Signup </button></a>

    </div>    

    <footer class="page_footer"><!-- Displays footer, usually Copyrights --> 
            Made With Expertise &copy; WebCode.Inc&trade; 
    </footer>

</body>
</html>