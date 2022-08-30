<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <title>Home Page</title>
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

</head>
<style>
  body{
    background-color: #354152;
    color: #7e8ba3;
    font-weight: 300;
    font-size: 1rem;
    line-height: 1.5;
    font-family: Helvetica Neue;
    }
    .align{
      align-items: center;
      color: #7e8ba3;
      font-weight: 300;
      font-size: 1rem;
      line-height: 1.5;
      font-family: Helvetica Neue;
      margin: 0;
      min-height: 100%;
    }
    input{
      border: 0;
      font: inherit;
      color: #7e8ba3;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      border-radius:25px;
      margin-top:10px; 
      margin-bottom:10px; 
     
   
}
    .form{
      margin-bottom: 1rem;
    }
    input{
      outline: 0;
      padding: 0.5rem 1rem;
      width: 100%;
    }
    .grid {
     margin: 0 auto;
     max-width: 25rem;
     width:100%;
}

h2 {
  font-size: 2.75rem;
  font-weight: 100;
  margin: 0 0 1rem;
  text-transform: uppercase;
}

svg {
  height: auto;
  max-width: 100%;
  vertical-align: middle;
}

a {
  color: white;
  text-decoration-line: none;
  font-size: 20px;
}
a:hover{
  color: hotpink;
}

.register {
  box-shadow: 0 0 250px #000;
  text-align: center;
  padding: 4rem 2rem;
  margin-top: 25%;

  }
.alert_warning {
  padding: 10px;
  background-color: #8f7837;
  color: white;
  }
  ul.breadcrumb {
  padding: 10px 16px;
  list-style: none;

}
ul.breadcrumb li {
 display: inline;
  font-size: 18px;
}
ul.breadcrumb li+li:before {
  padding: 8px;
  color: white;
  content: "/\00a0";
}
ul.breadcrumb li a {
  color: white;
  text-decoration: none;
  text-decoration-line: none;
  font-size: 15px;
}
ul.breadcrumb li a:hover {
  color: hotpink;

}

</style>
<body class="align">

  <div class="grid align__item">

    <div class="register">
      <ul class="breadcrumb" >
</ul>
      <h3>Login To complete Action</h3>
      <?php
                    include "../connect.php";
                    
                    if(isset($_POST['login'])){
                        
                        $username=$_POST['username'];
                        $Password=$_POST['Password'];
                        
                        $sql="SELECT * FROM `addusers` WHERE username ='$username'";
                        $results=mysqli_query($conn,$sql);
                        $row=mysqli_fetch_array($results);
                        if($row['username']==$username){
                            
                            $sql1="SELECT * FROM `addusers` WHERE username ='$username' AND Password='$Password'";
                            $result=mysqli_query($conn,$sql1);
                            if($result){
                                $data=mysqli_num_rows($result);

                                if($data==1){
									while($row=mysqli_fetch_array($result)){
										$id=$row['id'];
										$username=$row['username'];
										$usertype=$row['Role'];
										$LastName=$row['LastName'];
                      if($usertype=='admin'){
                        session_start();
                        $_SESSION['id']=$id;
                        $_SESSION['loggedin']=true;
                        $_SESSION['FirstName']=$FirstName;
                        $_SESSION['usertype']=$usertype;
                        $_SESSION['LastName']=$LastName;
                        header("location:welcome.php");
  
                      }else{
                        session_start();
                        $_SESSION['id']=$id;
                        $_SESSION['loggedin']=true;
                        $_SESSION['FirstName']=$FirstName;
                        $_SESSION['LastName']=$LastName;
                        header("location:welcome.php");
  
  
                      }

									}
                                    
                }else{
                  echo"<div class='alert_warning'>";
                  echo"<span >Incorrect login cridentials</span>";
                  echo"</div>";
                                }
                                
                            }
                            
                        }else{
                          echo"<div class='alert_warning'>";
                          echo"<span >User does not exist</span>";
                          echo"</div>";
                        }
                    }
                    
                  
                    ?>
					
      <form action="" method="post" class="form" style="margin-right: 10px;">

        <div class="form__field" >
          
          <input type="text" name="username" placeholder="Username" required>
        </div>

        <div class="form__field">
          <input type="password" name="Password" placeholder="Password" required>
        </div>

        <div class="forgot_pass" >
							<a href="pass_forgot.php" class="txt1" style="font-size:15px;">
								Forgot Password?
							</a>
						</div>

        <div class="form__field">
          <input type="submit" name="login" value="Log In" style="background-color: #378f7b; color:white; width:50%; font-size:17px;">
        </div>

      </form>

    </div>

  </div>

</body>
</html>
