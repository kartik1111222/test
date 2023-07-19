<?php
class myclass{
  
   function __destruct(){
      echo "object is destroyed";
   }
}
$obj=new myclass();
?>