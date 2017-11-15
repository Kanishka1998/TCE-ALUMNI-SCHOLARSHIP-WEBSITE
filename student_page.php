<?php

$connect = mysqli_connect("localhost","root","","Student") ;
if($connect === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }

$year=date('Y');
$tab=($year-2017)+1;
$prefix="student";
$tabname="$prefix $year";
$points="points";
$tablename="$points $year";
$con=0;




if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = test_input($_POST["uname"]);
  $password = test_input($_POST["psw"]);
  }

if($username>=57000 && $username<=70000 && $username === $password){
echo "<br><a href='apply.php'>Please click here to apply for scholarship</a>";
}
  
else{
  
  echo "Your Username or password is wrong";
  
   echo "<br><a href='student_login.php'> Login</a>";

}




function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

