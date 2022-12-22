<?php
require_once './upload.php';
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($submit) == false){
        die();
    }
    $validator = new Validator($_POST);

    if(empty($validator->validateName()) == false)
    {
        die();
    }
    if(empty($validator->validateEmailAddress()) == false)
    {
        die();
    }
    
    // Continue
    
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
    <fieldset style="width: 50px; padding-top: -50px;" >
        <legend>Log in</legend>
    <table>
        <th>Info</th>
        <tr>
        <td>Name
        <input type="text" name="name" id="" value="">
        </td>
        </tr><br>
        <tr>
        <td>Email
            <input type="text" name="email">
            </td></tr>
        <br>     
        <tr>
        <td>
        <input type="submit" value="submit" name="submit">
        </td>
        </tr>
    </table>
    </fieldset>
    </form>    
</body>
</html>
<?php
if(isset($submit)){
    echo $name;
    echo "<br>";
    echo $email;
}
?>