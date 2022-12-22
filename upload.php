<?php
class Validator {
    private $formPost;

    public function __construct($formPost)
    {
        $this->formPost = $formPost; 
    }
    private function sanitize($data){
        $data = trim($data);
        $data = stripslashes($data);
        return $data;
    }
    public function validateName()
    {
        $error = '';
        if(empty($this->formPost['name'])){
            $error = 'Name is required';
        }else{
            $name = $this->sanitize($_POST['name']);
            $name=filter_var($name,FILTER_SANITIZE_STRING);
            if(!preg_match("/^[a-zA-Z]*$/",$name)){
                $error = 'Only letters and whitespace allowed only';
            }
        }
        return $error;
    }
    public function validateEmailAddress()
    {
        $error = '';
        if(empty($email)){
            $error = "Email is required";
        }else{
            $email = $this->sanitize($_POST['email']); 
            $email=filter_var($email,FILTER_SANITIZE_EMAIL);
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)===false){
                
            }else{
                $error = "Valid email required";
            }
        }
        return $error;
    }
}


?>