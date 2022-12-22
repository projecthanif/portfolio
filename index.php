<?php



try {
    checkNum(2);
    //If the exception is thrown, this text will not be shown
    //add commit
    echo 'If you see this, the number is 1 or below';
  }
  
  //catch exception
  catch(Exception $e) {
    echo 'Message: ' .$e->getMessage();
  }