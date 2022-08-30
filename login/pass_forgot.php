<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <title>l&f Forgot Password</title>
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

      <svg xmlns="http://www.w3.org/2000/svg" class="site__logo" width="56" height="84" viewBox="77.7 214.9 274.7 412"><defs><linearGradient id="a" x1="0%" y1="0%" y2="0%"><stop offset="0%" stop-color="#8ceabb"/><stop offset="100%" stop-color="#378f7b"/></linearGradient></defs><path fill="url(#a)" d="M215 214.9c-83.6 123.5-137.3 200.8-137.3 275.9 0 75.2 61.4 136.1 137.3 136.1s137.3-60.9 137.3-136.1c0-75.1-53.7-152.4-137.3-275.9z"/></svg>
      <ul class="breadcrumb" >
  <li><a href="../index.php">Home Page</a></li>
  <li>Reset Password</li>
</ul>
      <h3>Enter Phone Number To Send OTP</h3>
      <?php
                    include "../connect.php";
                    
                    if(isset($_POST['send'])){
                        
                        $pnumber=$_POST['pnumber'];
            
                        
                        $sql="SELECT * FROM `members` WHERE pnumber='$pnumber'";
                        $results=mysqli_query($conn,$sql);
                        $row=mysqli_fetch_array($results);
                        if($row['pnumber']==$pnumber){
                            
                            $sql1="SELECT * FROM `members` WHERE pnumber='$pnumber'";
                            $result=mysqli_query($conn,$sql1);
                            if($result){
                                $data=mysqli_num_rows($result);
                                if($data==1){
									while($row=mysqli_fetch_array($result)){
                                        $status=$row['status'];
										$id=$row['id'];
										$fname=$row['fname'];
										$usertype=$row['usertype'];
										$lname=$row['lname'];
                                       
									}

                                   
                                    $otp=rand(1231,7879);
                                    require_once 'vendor/autoload.php';
                                    $messagebird = new MessageBird\Client('Y7PpJwrxMxWUj8rXGLKKw3wUj');
                                    $message = new MessageBird\Objects\Message;
                                    $message->originator = '+254711187268';
                                    $message->recipients = ["$pnumber"];
                                    $message->body = 'OTP: '.$otp.'';
                                    $response = $messagebird->messages->create($message);
                                    print_r(json_encode($response));
                                    
                                    $sql5="UPDATE members SET res_otp='$otp' WHERE pnumber='$pnumber'";
                                    $results5=mysqli_query($conn, $sql5);
                                    if($results5){
                                        echo"OTP sent successfully";
                                        header("location:pass_reset.php?pnumber=".$pnumber."");

                                    }else{
                                        echo"something went wrong! Resend OTP";
                                    }
                                }
                                
                            }
                            
                        }else{
                          echo"<div class='alert_warning'>";
                          echo"<span >Phone Number Not found</span>";
                          echo"</div>";
                        }
                    }
                    
                    
                    ?>
					
      <form action="" method="post" class="form" style="margin-right: 10px;">

        <div class="form__field" >
          
          <input type="text" name="pnumber" placeholder="Phone Number">
        </div>

        <div class="forgot_pass" >
							<a href="login.php" class="txt1" style="font-size:15px;">
								Remember Your Password? Login
							</a>
						</div>

        <div class="form__field">
          <input type="submit" name="send" value="SEND OTP" style="background-color: #378f7b; color:white; width:50%; font-size:17px;">
        </div>

      </form>

      <p>Not A Member? <a href="register.php">Register</a></p>

      <a href="../index.php"><i class="bi bi-house-fill"></i><span>Home</span></a>

    </div>

  </div>

</body>
</html>
