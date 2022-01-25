<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $email=$_REQUEST["email"];
    $name=$_REQUEST["name"];
    $password=$_REQUEST["password"];
    $check=$_REQUEST["check-password"];

    $errors = [];
    if (empty($email)){
        $errors["email"]="nhap email";
    }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errors["email"]= "email sai dinh dang";
    }

    if (empty($name)){
        $errors["name"]="nhap ten vao";
    }

    if (empty($password)){
        $errors["password"]="nhap mat khau nha";
    }elseif(!preg_match("/^[A-Za-z0-9]{6,}$/",$password)){
        $errors["password"]="mat khau 6 ky tu tro len";
    }

    if (empty($check)){
        $errors["check-password"]="xac nhan lai mat khau";
    }elseif ($check != $password){
        $errors["check-password"]="mat khau khong trung";
    }

    if (empty($errors)){
        header("location:index.php");
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <p>Email</p>
    <input type="text" name="email" placeholder="nhap email vao day" value="<?php echo $email?>">
    <p style="color: red"><?php echo $errors["email"]??""?></p>
    <p>Full Name</p>
    <input type="text" name="name" placeholder="nhap ho ten">
    <p style="color: red"><?php echo $errors["name"]??""?></p>
    <p>Password</p>
    <input type="password" name="password" placeholder="nhap mat khau">
    <p style="color: red"><?php echo $errors["password"]??""?></p>
    <p>Check password</p>
    <input type="password" name="check-password" placeholder="xac nhan mat khau">
    <p style="color: red"><?php echo $errors["check-password"]??""?></p>
    <p><button>Register</button></p>
</form>
</body>
</html>
