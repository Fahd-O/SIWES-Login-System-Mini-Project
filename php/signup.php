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

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
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
    <title> WebCode </title>
    <link rel="stylesheet" href="loginPro.css">
</head>
<body class="outline">
    
    

    <div class="logo"> <a class="w">Web</a><a class="c">Code</a><a class="tm">&trade;</a> </div> 

    <div id="box">
        <form method="POST"> 

            <h1 style="text-align: center;">
                 Signup 
            </h1>

            <p style="font-size: x-large;"> 
                Create your Username and Password to Signup...
            </p>

            <p>
                <label for="username" class="un">Username:</label> 
                <input type="text" name="user_name" id="username" required/>
            </p>
            
            <p>
                <label for="user password" class="pw">Password:</label> 
                <input type="password" name="password" id="userpassword" required/>
            </p>

            <p>
                <input type="submit" value="Signup" class="signupbutton"/>
            </p>

            <a href="Login.php" ><button class="loginbutton" > Login </button></a>

        </form>
    </div>    

    <footer class="page_footer"><!-- Displays footer, usually Copyrights --> 
            Made With Expertise &copy; WebCode.Inc&trade; 
    </footer>

</body>
</html>