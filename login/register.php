<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <title>l&f Register Page</title>
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

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
  padding: 1rem 2rem;
  margin-top: 8%;
  margin-bottom: 15%;

  }
  label{
      font-size: 20px;
     
  }
  .alert {
  padding: 10px;
  background-color: #f44336;
  color: white;
  }
  .alert_warning {
  padding: 10px;
  background-color: #8f7837;
  color: white;
  }
  .alert_success {
  padding: 10px;
  background-color: #378f7b;
  color: white;
  }
</style>
<body class="align">

  <div class="grid align__item">
      <h3 style="font-size: 25px;">Register With Us To complete Action </h3>

    <div class="register">

      <svg xmlns="http://www.w3.org/2000/svg" class="site__logo" width="56" 
      height="84" viewBox="77.7 214.9 274.7 412"><defs><linearGradient id="a" 
      x1="0%" y1="0%" y2="0%"><stop offset="0%" stop-color="#8ceabb"/><stop offset="100%"
      stop-color="#378f7b"/></linearGradient></defs><path fill="url(#a)" d="M215 214.9c-83.6 123.5-137.3 200.8-137.3 275.9 0 75.2 61.4 136.1 137.3 136.1s137.3-60.9 137.3-136.1c0-75.1-53.7-152.4-137.3-275.9z"/></svg>

      <h3 style="color: white;"> New Member Registration Form</h3>


      <form action="register.php" method="POST" class="form" style="margin-right: 10px;">
      <?php
                        include"../connect.php";
                        if(isset($_POST['submit'])){
                            $fname=$_POST['fname'];
                            $lname=$_POST['lname']; 
                            $pnumber=$_POST['pnumber'];
                            $email=$_POST['email'];
                            $password=$_POST['password'];
                            $cpassword=$_POST['cpassword'];

                           


                            if($password!=$cpassword){
                              echo"<div class='alert_warning'>";
                              echo"<span >Password Mismatch</span>";
                              echo"</div>";
                            }
                            else{
                                $sql="SELECT * FROM `members` WHERE pnumber='$pnumber'";
                                $result=mysqli_query($conn,$sql);
                                $row=mysqli_fetch_array($result);
                                if($row['pnumber']==$pnumber){
                                  echo"<div class='alert_warning'>";
                                  echo"<span >Phone number already exists</span>";
                                  echo"</div>";
                                
                                }
                                else{
                                  $otp=rand(1231,7879);
                                  require_once 'vendor/autoload.php';
                                  $messagebird = new MessageBird\Client('Y7PpJwrxMxWUj8rXGLKKw3wUj');
                                  $message = new MessageBird\Objects\Message;
                                  $message->originator = '+254711187268';
                                  $message->recipients = ["$pnumber"];
                                  $message->body = 'OTP: '.$otp.'';
                                  $response = $messagebird->messages->create($message);
                                  print_r(json_encode($response));
                                    $password=md5($password);
                                    $sql1="INSERT INTO `members`( `fname`, `lname`, `pnumber`, `email`, `password`,otp) 
                                    VALUES ('$fname','$lname','$pnumber','$email','$password', '$otp')";
                                    $results=mysqli_query($conn,$sql1);
                                    if($results){
                                     header('location:verification.php');
                                    }
                                    else{
                                      echo"<div class='alert'>";
                                      echo"<span >Ooops! Something Went Wrong</span>";
                                      echo"</div>";
                                    }
                                }
                            }
                        }
                        ?>
        <div class="form__field" >
          <label for="fname">First Name:</label>
          <input type="text" name="fname" placeholder="First Name" required>
        </div>

        <div class="form__field" >
          <label for="lname">Last Name:</label>
          <input type="text" name="lname" placeholder="Last Name" required>
        </div>

        <div class="form__field" >
          <label for="pnumber">Phone Number:</label>
          <input type="tel" name="pnumber" placeholder="+2547......" required>
        </div>

        <div class="form__field" >
          <label for="email">Email:</label>
          <input type="email" name="email" placeholder="Email Address" required>
        </div>

        <div class="form__field">
            <label for="password">Password:</label>
          <input type="password" name="password" placeholder="Password" >
        </div>

        <div class="form__field">
            <label for="password">Confirm Password:</label>
          <input type="password" name="cpassword" placeholder="confirm Password" >
        </div>

        <div class="form__field">
          <input type="submit" value="Register" name="submit" style="background-color: #378f7b; 
          color:white; width:50%; font-size:17px;">
                                     
        </div>

      </form>

      <p>Already A Member? <a href="login.php">Log In</a></p>

      <a href="../index.php"><span>Home</span></a>

    </div>

  </div>

</body>
</html>
