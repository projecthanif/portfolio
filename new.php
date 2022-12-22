<?php
$name=$_POST['name']??'';
$email=$_POST['email']??'';
$valiemail = $valname = '';
$submit=$_POST['submit']??'';
$erremail = $errname = '';

if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($submit)){
        if(empty($name)){
            $errname = "name is required";
        }else{
            $name = process($_POST['name']);
            if (!preg_match("/^[a-zA-Z-]*$/", $name)){
                $valname = "Only letter and Whitespaces allowed";
            }
            
        }if(empty($email)){
            $erremail = "Email Required";
        }else {
            $email = process($_POST['email']);
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)===true){
                $valiemail = "Invalid Email";
            }

        }
    }
}
function process($data){
    $data = trim($data);
    return $data;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="name">Name:</label>
          <input type="text" name="name" id="">
          <?php echo $errname;
          echo $valname;?>
          <br>
        <label for="email">Email:</label>
           <input type="text" name="email" id="">
           <?php echo $erremail;
           echo $valiemail;?>
           <br>
        <!-- <label for="password">Password:</label>
            <input type="password" name="password" id="">
            <br> -->
        <label for="gender">Gender</label>
             <input type="radio" name="Gender" id="">Male
             <input type="radio" name="Gender" id="">Female
             <br>
        <input type="submit" value="login" name="submit">
    </form>
</body>
</html>
<?php
 if(isset($submit)){
    
echo "<h4>Input<h4>";
echo "<br>";
echo "Welcome $name";
echo "<br>";
echo "Your email is $email";

}
 else{
     header("Location:new.php");
 }
?>