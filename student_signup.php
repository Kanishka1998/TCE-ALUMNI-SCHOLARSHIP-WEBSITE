<!DOCTYPE html>
<html>
<style>
form {
    border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 15%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
<body>
<center>
<h2>Student Login </h2>
</center>
<form method="post">
  <center>
  <div class="container">
    <label><b>Username</b></label><br>
    <input type="text" placeholder="Enter Username(your Department registration number)" name="uname" required><br>

    <label><b>Password</b></label><br>

    <input type="password" placeholder="Enter Password" name="psw" required><br>
<label><b>Confirm Password</b></label><br>

    <input type="password" placeholder="Enter Password" name="psw" required><br>
        
    <input type="submit" formaction="/tce_alumni/student_login.php" value="Signup">&nbsp &nbsp <br>
 
  </div>
</center>
  <center>
  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button></center>
    <span class="psw"><a href="/tce_alumni/home1.php">Home</a></span>
  </div>
</form>

</body>
</html>

