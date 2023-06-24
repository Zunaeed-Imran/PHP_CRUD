<?php
$con = new mysqli('localhost',
                  'root',
                  '',
                   'businessdb'
);
if($con){
  echo "Connect Successful";
}else{
  die(mysqli_errno($con));
}
