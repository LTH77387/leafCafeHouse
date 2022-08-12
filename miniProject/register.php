<?php 
   session_start();
   $cookie_name='cookies';
   $value=1000;
   $date=time() + 3600000 * 5;
   setcookie($cookie_name,$value,$date);
   $firstNameErr=$lastNameErr=$emailErr=$passwordErr=$confirmPasswordErr="";
if(isset($_POST['register'])){
    $firstName=$_POST['firstName'];
    $lastName=$_POST['lastName'];
    $email=$_POST['email'];
    $password=$_POST['password'];
   $confirmPassword=$_POST['confirmPassword'];

   $_SESSION['firstName']=$firstName;
   $_SESSION['lastName']=$lastName;

   $_SESSION['email']=$email;

   $_SESSION['password']=$password;

   $_SESSION['confirmPassword']=$confirmPassword;
$_COOKIE['firstName']=$firstName;
$_COOKIE['lastName']=$lastName;
$_COOKIE['email']=$email;
$_COOKIE['password']=$password;
$_COOKIE['confirmPassword']=$confirmPassword;
if(empty($firstName)){
  $firstNameErr=   "First Name is required.";

}
if(empty($lastName)){
 $lastNameErr="Last Name is required.";
 require_once('./register.php');
}
if(empty($email)){
    $emailErr= "Email is required.";
  
}
if(empty($password)){
   $passwordErr="Password is required.";
 
}
if(empty($confirmPassword)){
   $confirmPasswordErr =  "Confirm Password is required.";
 
}


if($_SESSION['firstName'] !=null && $_SESSION['lastName'] !=null && $_SESSION['email'] != null && $_SESSION['password'] != null && $_SESSION['confirmPassword'] != null){
    header("Location: ./asset/index.php");

}

}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <script>
    </script>
</head>

<body>
    <form  action=""  method="POST">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-3 mt-5">
                    <div class="card">
                        <div class="card-header text-center fs-3">
                            <span style="font-family: 'Courier New', Courier, monospace;">Register Now!!!</span>
                        </div>
                        <div class="card-body">
                            <div class="mb-3 px-5">
                                <label for="firstName">First Name :</label>
                                <input type="text" name="firstName" id="" class="form-control" placeholder="Enter Your  First Name">
                                <p class="text-danger">
                                    <?php  echo $firstNameErr  ?>
                                </p>
                            </div>
                            <div class="mb-3 px-5">
                                <label for="lastName">Last Name :</label>
                                <input type="text" name="lastName" id="" class="form-control" placeholder="Enter Your Last Name">
                                <p class="text-danger">
                                    <?php  echo $lastNameErr  ?>
                                </p>
                            </div>
                            <div class="mb-3 px-5">
                                <label for="eamil">Email :</label>
                                <input type="email" name="email" id="" class="form-control" placeholder="Enter Your Email">
                                <p class="text-danger">
                                    <?php  echo $emailErr  ?>
                                </p>

                            </div>
                            <div class="mb-3 px-5">
                                <label for="password">Password :</label>
                                <input type="password" name="password" id="" class="form-control" placeholder="Enter Password">
                                <p class="text-danger">
                                    <?php  echo $passwordErr  ?>
                                </p>
                            </div>
                            <div class="mb-3 px-5">
                                <label for="confirmPassword">Confirm Password :</label>
                                <input type="password" name="confirmPassword" id="" class="form-control" placeholder="Enter Confirm Password">
                                <p class="text-danger">
                                    <?php  echo $confirmPasswordErr  ?>
                                </p>
                            </div>
                            <div class="mb-3 px-5">
                                <input type="submit" value="register" class="btn bg-dark text-white float-end" name="register">
                            </div>

                        </div>

                    </div>

                </div>
  
            </div>
        </div>
    </form>
</body>

</html>