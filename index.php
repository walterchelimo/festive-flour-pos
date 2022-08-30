 <?php
                    include "connect.php";
                    
                    if(isset($_POST['login'])){
						$error=array();
                        
                        $FirstName=$_POST['FirstName'];
                        $Password=$_POST['Password'];
                        
                        $sql="SELECT * FROM `addusers` WHERE username ='$FirstName'";
                        $results=mysqli_query($conn,$sql);
                        $row=mysqli_fetch_array($results);
                        $dat=mysqli_num_rows($results);

                                if($dat==1){
                            
                            $sql1="SELECT * FROM `addusers` WHERE username ='$FirstName' AND password='$Password'";
                            $result=mysqli_query($conn,$sql1);
                            if($result){
                                $data=mysqli_num_rows($result);

                                if($data==1){
									while($row=mysqli_fetch_array($result)){
										$id=$row['user_ID'];
										$FirstName1=$row['FirstName'];
                    $FirstName=$row['username'];
										$LastName=$row['LastName'];
                    $role=$row['Role'];
                    $role1=$row['Role'];

                        session_start();
                        $_SESSION['id']=$id;
                        $_SESSION['loggedin']=true;
                        $_SESSION['FirstName']=$FirstName1;
                        $_SESSION['username']=$FirstName;
                        $_SESSION['role']=$role;
                        $_SESSION["usertype"]=$role1;

                        $_SESSION['LastName']=$LastName;
                      $insert	= "INSERT INTO logs (FirstName,Role) VALUES('$FirstName','Login')";
                      $logs = mysqli_query($conn,$insert);
                      header("location:welcome.php");

									}
                                    
                }else{
                  $error='Incorrect longin credentials';
                                }
                                
                            }
                            
                        }else{
                       $error='User Does Not Exist';
                        }
                    }
                    
                  
                    ?>
<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="0bntG0cWXOOVfzGUlBUULLL1BaiSE2an89IrXo27">

    <title>Login-Festive Millers LTD</title> 

    <link rel="stylesheet" href="https://driplets.risetpos.com/css/vendor.css?v=478">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">



<!-- app css -->
<link rel="stylesheet" href="https://driplets.risetpos.com/css/app.css?v=478">

<style type="text/css">
	/*
	* Pattern lock css
	* Pattern direction
	* http://ignitersworld.com/lab/patternLock.html
	*/
	.patt-wrap {
	  z-index: 10;
	}
	.patt-circ.hovered {
	  background-color: #cde2f2;
	  border: none;
	}
	.patt-circ.hovered .patt-dots {
	  display: none;
	}
	.patt-circ.dir {
	  background-image: url("https://driplets.risetpos.com/img/pattern-directionicon-arrow.png");
	  background-position: center;
	  background-repeat: no-repeat;
	}
	.patt-circ.e {
	  -webkit-transform: rotate(0);
	  transform: rotate(0);
	}
	.patt-circ.s-e {
	  -webkit-transform: rotate(45deg);
	  transform: rotate(45deg);
	}
	.patt-circ.s {
	  -webkit-transform: rotate(90deg);
	  transform: rotate(90deg);
	}
	.patt-circ.s-w {
	  -webkit-transform: rotate(135deg);
	  transform: rotate(135deg);
	}
	.patt-circ.w {
	  -webkit-transform: rotate(180deg);
	  transform: rotate(180deg);
	}
	.patt-circ.n-w {
	  -webkit-transform: rotate(225deg);
	   transform: rotate(225deg);
	}
	.patt-circ.n {
	  -webkit-transform: rotate(270deg);
	  transform: rotate(270deg);
	}
	.patt-circ.n-e {
	  -webkit-transform: rotate(315deg);
	  transform: rotate(315deg);
	}
    body{
        font-size: 20px;
    }
    .container{
        font-size: 20px;
    }
</style>

   
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  
</head>

<body>
            <div class="container-fluid">
        <div class="row eq-height-row">
            <div class="col-md-5 col-sm-5 hidden-xs left-col eq-height-col" >
                <div class="left-col-content login-header"> 
                    <div style="margin-top: 50%;">
                    
                                           <span style="color:white;">Riset ERP</span>
                     
                    
                    <br/>
                                        </div>
                </div>
            </div>
            <div class="col-md-7 col-sm-7 col-xs-12 right-col eq-height-col">
                <div class="row">
                <div class="col-md-3 col-xs-4" style="text-align: left;">
                    <select class="form-control input-sm" id="change_lang" style="margin: 10px;font-size:17px;">
                                            <option value="en" 
                             
                                selected 
                                                    >
                            English
                        </option>
                                            <option value="es" 
                                                    >
                            Spanish - Español
                        </option>
                                            <option value="sq" 
                                                    >
                            Albanian - Shqip
                        </option>
                                            <option value="hi" 
                                                    >
                            Hindi - हिंदी
                        </option>
                                            <option value="nl" 
                                                    >
                            Dutch
                        </option>
                                            <option value="fr" 
                                                    >
                            French - Français
                        </option>
                                            <option value="de" 
                                                    >
                            German - Deutsch
                        </option>
                                            <option value="ar" 
                                                    >
                            Arabic - العَرَبِيَّة
                        </option>
                                            <option value="tr" 
                                                    >
                            Turkish - Türkçe
                        </option>
                                            <option value="id" 
                                                    >
                            Indonesian
                        </option>
                                            <option value="ps" 
                                                    >
                            Pashto
                        </option>
                                            <option value="pt" 
                                                    >
                            Portuguese
                        </option>
                                            <option value="vi" 
                                                    >
                            Vietnamese
                        </option>
                                            <option value="ce" 
                                                    >
                            Chinese
                        </option>
                                            <option value="ro" 
                                                    >
                            Romanian
                        </option>
                                            <option value="lo" 
                                                    >
                            Lao
                        </option>
                                        </select>
                </div>
                <div class="col-md-9 col-xs-8" style="text-align: right;padding-top: 10px;">
                                            <!-- Register Url -->
                                                    <a href="#" class="btn bg-maroon btn-flat" ><b></b></a>
                            <!-- pricing url -->

								   								
								   </div>
                
                    <div class="login-form col-md-12 col-xs-12 right-col-content">
        <p class="form-header text-white">Login</p>
		<span style="color:red;">
                                           <?php
				if(isset($error)){
									   echo $error;
				}
									   ?>
									   </span>
        <form method="POST" action="" id="login-form">
            <div class="form-group has-feedback ">
                                <input id="username" type="text" class="form-control" name="FirstName" value="" required autofocus placeholder="Username">
                <span i class="bi bi-person-fill form-control-feedback"></span>
                            </div>
            <div class="form-group has-feedback ">
                <input id="password" type="password" class="form-control" name="Password"
                value="" required placeholder="Password">
                <span i class="bi bi-lock-fill form-control-feedback"></span>
                            </div>
            <div class="form-group">
                <div class="checkbox icheck">
                    <label>
                        <input type="checkbox" name="remember" > Remember Me                    </label>
                </div>
            </div>
            <br>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-flat btn-login" name="login">Login</button>
                                <a href="passwordrecovery.php" class="pull-right">
                    Forgot Your Password?                </a>
                        </div>
        </form>
    </div>
     
                </div>
            </div>
        </div>
    </div>

    
</body>
</html>